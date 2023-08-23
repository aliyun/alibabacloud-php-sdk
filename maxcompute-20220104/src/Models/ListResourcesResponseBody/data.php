<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody\data\resources;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates the marker after which the returned list begins.
     *
     * @example ZmN0X21vbnRoX3Rhb2Jhb19pbmRleCE=
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @description The list of resources.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }
        if (null !== $this->resources) {
            $res['resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
