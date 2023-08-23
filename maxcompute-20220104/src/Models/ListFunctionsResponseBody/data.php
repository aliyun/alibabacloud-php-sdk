<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody\data\functions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about each function.
     *
     * @var functions[]
     */
    public $functions;

    /**
     * @description Indicates the marker after which the returned list begins.
     *
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
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
    protected $_name = [
        'functions' => 'functions',
        'marker'    => 'marker',
        'maxItem'   => 'maxItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functions) {
            $res['functions'] = [];
            if (null !== $this->functions && \is_array($this->functions)) {
                $n = 0;
                foreach ($this->functions as $item) {
                    $res['functions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
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
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n                = 0;
                foreach ($map['functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? functions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        return $model;
    }
}
