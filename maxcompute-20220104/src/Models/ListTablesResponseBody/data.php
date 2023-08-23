<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data\tables;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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

    /**
     * @description The information about tables.
     *
     * @var tables[]
     */
    public $tables;
    protected $_name = [
        'marker'  => 'marker',
        'maxItem' => 'maxItem',
        'tables'  => 'tables',
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
        if (null !== $this->tables) {
            $res['tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['tables'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
