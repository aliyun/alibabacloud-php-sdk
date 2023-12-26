<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionsRequest extends Model
{
    /**
     * @description Specifies the marker after which the returned list begins.
     *
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @description The names of the returned resources. The names must start with the value specified by the prefix parameter. If the prefix parameter is set to a, the names of the returned resources must start with a.
     *
     * @example a
     *
     * @var string
     */
    public $prefix;

    /**
     * @example default
     *
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'marker'     => 'marker',
        'maxItem'    => 'maxItem',
        'prefix'     => 'prefix',
        'schemaName' => 'schemaName',
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
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionsRequest
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
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        return $model;
    }
}
