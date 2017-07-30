/**
 * @file
 * Contains \Drupal\embassy_gallery\Routing\EmbassyGalleryRouting.
 */

namespace Drupal\embassy_gallery\Routing;

use Symfony\Component\Routing\Route;

/**
 * Defines dynamic routes.
 */
class EmbassyGalleryRouting {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $routes = array();
    $routes['embassy_gallery.newphoto'] = new Route(
      '/example',
    );
    return $routes;
  }

}
