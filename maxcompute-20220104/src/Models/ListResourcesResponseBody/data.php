<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody\data\resources;

class data extends Model
{
    /**
     * @var string
     */
    public $marker;
    /**
     * @var int
     */
    public $maxItem;
    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'marker'    => 'marker',
        'maxItem'   => 'maxItem',
        'resources' => 'resources',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1               = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1               = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1++] = resources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
