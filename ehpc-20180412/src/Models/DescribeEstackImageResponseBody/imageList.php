<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody\imageList\imageListInfo;

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
        if (\is_array($this->imageListInfo)) {
            Model::validateArray($this->imageListInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageListInfo) {
            if (\is_array($this->imageListInfo)) {
                $res['ImageListInfo'] = [];
                $n1 = 0;
                foreach ($this->imageListInfo as $item1) {
                    $res['ImageListInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageListInfo'])) {
            if (!empty($map['ImageListInfo'])) {
                $model->imageListInfo = [];
                $n1 = 0;
                foreach ($map['ImageListInfo'] as $item1) {
                    $model->imageListInfo[$n1++] = imageListInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
