<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageCachesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageCachesResponseBody\imageCaches\imageCache;
use AlibabaCloud\Tea\Model;

class imageCaches extends Model
{
    /**
     * @var imageCache[]
     */
    public $imageCache;
    protected $_name = [
        'imageCache' => 'ImageCache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCache) {
            $res['ImageCache'] = [];
            if (null !== $this->imageCache && \is_array($this->imageCache)) {
                $n = 0;
                foreach ($this->imageCache as $item) {
                    $res['ImageCache'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageCache'])) {
            if (!empty($map['ImageCache'])) {
                $model->imageCache = [];
                $n                 = 0;
                foreach ($map['ImageCache'] as $item) {
                    $model->imageCache[$n++] = null !== $item ? imageCache::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
