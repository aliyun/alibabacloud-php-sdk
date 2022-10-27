<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images\imageInfo;
use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var imageInfo[]
     */
    public $imageInfo;
    protected $_name = [
        'imageInfo' => 'ImageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = [];
            if (null !== $this->imageInfo && \is_array($this->imageInfo)) {
                $n = 0;
                foreach ($this->imageInfo as $item) {
                    $res['ImageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInfo'])) {
            if (!empty($map['ImageInfo'])) {
                $model->imageInfo = [];
                $n                = 0;
                foreach ($map['ImageInfo'] as $item) {
                    $model->imageInfo[$n++] = null !== $item ? imageInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
