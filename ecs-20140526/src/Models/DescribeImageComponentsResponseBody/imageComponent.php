<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageComponentSet) {
            $res['ImageComponentSet'] = [];
            if (null !== $this->imageComponentSet && \is_array($this->imageComponentSet)) {
                $n = 0;
                foreach ($this->imageComponentSet as $item) {
                    $res['ImageComponentSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageComponent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageComponentSet'])) {
            if (!empty($map['ImageComponentSet'])) {
                $model->imageComponentSet = [];
                $n                        = 0;
                foreach ($map['ImageComponentSet'] as $item) {
                    $model->imageComponentSet[$n++] = null !== $item ? imageComponentSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
