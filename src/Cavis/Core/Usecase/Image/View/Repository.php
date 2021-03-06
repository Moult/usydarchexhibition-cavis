<?php
/**
 * @license MIT
 * Full license text in LICENSE file
 */

namespace Cavis\Core\Usecase\Image\View;

interface Repository
{
    /**
     * Returns all associated image data and comments from a given image id
     *
     * Example:
     * $image = $repository->get_all_image_data(42);
     * var_dump($image->comments); # Show all comment data
     *
     * @param int $image_id The unique ID associated with the image
     *
     * @return Cavis\Core\Data\Image
     */
    public function get_all_image_data($image_id);
}
