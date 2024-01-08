<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesRequest extends Model
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
     * @description The name of the resource.
     *
     * @example res
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the schema.
     *
     * @example default
     *
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'marker'     => 'marker',
        'maxItem'    => 'maxItem',
        'name'       => 'name',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesRequest
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        return $model;
    }
}
