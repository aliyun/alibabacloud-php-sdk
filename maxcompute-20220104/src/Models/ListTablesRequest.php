<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListTablesRequest extends Model
{
    /**
     * @description Specifies the marker after which the returned list begins.
     *
     * @example Y29tbWlzc2lvbl9leHRlcm5hbF91cmdlXzFfd3Ih
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
     * @description The name of the schema.
     *
     * @example default
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The type of the table.
     *
     * @example internal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'marker'     => 'marker',
        'maxItem'    => 'maxItem',
        'prefix'     => 'prefix',
        'schemaName' => 'schemaName',
        'type'       => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTablesRequest
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
