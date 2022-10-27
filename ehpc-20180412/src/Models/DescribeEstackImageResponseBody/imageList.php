<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody\imageList\imageListInfo;
use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @var imageListInfo[]
     */
    public $imageListInfo;
    protected $_name = [
        'imageListInfo' => 'ImageListInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageListInfo) {
            $res['ImageListInfo'] = [];
            if (null !== $this->imageListInfo && \is_array($this->imageListInfo)) {
                $n = 0;
                foreach ($this->imageListInfo as $item) {
                    $res['ImageListInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageListInfo'])) {
            if (!empty($map['ImageListInfo'])) {
                $model->imageListInfo = [];
                $n                    = 0;
                foreach ($map['ImageListInfo'] as $item) {
                    $model->imageListInfo[$n++] = null !== $item ? imageListInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
