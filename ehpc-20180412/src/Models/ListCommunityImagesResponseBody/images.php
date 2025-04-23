<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images\imageInfo;

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
        if (\is_array($this->imageInfo)) {
            Model::validateArray($this->imageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageInfo) {
            if (\is_array($this->imageInfo)) {
                $res['ImageInfo'] = [];
                $n1 = 0;
                foreach ($this->imageInfo as $item1) {
                    $res['ImageInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInfo'])) {
            if (!empty($map['ImageInfo'])) {
                $model->imageInfo = [];
                $n1 = 0;
                foreach ($map['ImageInfo'] as $item1) {
                    $model->imageInfo[$n1++] = imageInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
