<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet;

class imageComponent extends Model
{
    /**
     * @var imageComponentSet[]
     */
    public $imageComponentSet;
    protected $_name = [
        'imageComponentSet' => 'ImageComponentSet',
    ];

    public function validate()
    {
        if (\is_array($this->imageComponentSet)) {
            Model::validateArray($this->imageComponentSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageComponentSet) {
            if (\is_array($this->imageComponentSet)) {
                $res['ImageComponentSet'] = [];
                $n1                       = 0;
                foreach ($this->imageComponentSet as $item1) {
                    $res['ImageComponentSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageComponentSet'])) {
            if (!empty($map['ImageComponentSet'])) {
                $model->imageComponentSet = [];
                $n1                       = 0;
                foreach ($map['ImageComponentSet'] as $item1) {
                    $model->imageComponentSet[$n1++] = imageComponentSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
