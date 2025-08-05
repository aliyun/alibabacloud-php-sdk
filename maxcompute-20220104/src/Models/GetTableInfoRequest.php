<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetTableInfoRequest extends Model
{
    /**
     * @description The name of the schema to which the table or view belongs.
     *
     * @example default
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The type of the table or view that you want to view. Valid values:
     *
     *   **internal**: internal table
     *   **external**: external table
     *   **view**: view
     *   **materializedView**: [materialize view](https://www.alibabacloud.com/help/maxcompute/user-guide/materialized-view-operations)
     *
     * @example internal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'schemaName' => 'schemaName',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GetTableInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
