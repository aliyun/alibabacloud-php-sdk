<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image;

class images extends Model
{
    /**
     * @var image[]
     */
    public $image;
    protected $_name = [
        'image' => 'Image',
    ];

    public function validate()
    {
        if (\is_array($this->image)) {
            Model::validateArray($this->image);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            if (\is_array($this->image)) {
                $res['Image'] = [];
                $n1           = 0;
                foreach ($this->image as $item1) {
                    $res['Image'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = [];
                $n1           = 0;
                foreach ($map['Image'] as $item1) {
                    $model->image[$n1++] = image::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
