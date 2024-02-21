<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutoSqlOptimizeStatusRequest extends Model
{
    /**
     * @description The database instance IDs. Separate multiple IDs with commas (,).
     *
     * >  You can specify up to 50 instance IDs.
     * @example rm-bp10usoc1erj7****,rm-bp10usoc1erj7****
     *
     * @var string
     */
    public $instances;

    /**
     * @description The status of the automatic SQL optimization feature. Valid values:
     *
     *   **0**: The automatic SQL optimization feature is disabled.
     *   **1**: **SQL diagnosis and automatic index creation** is specified.
     *   **3**: **SQL diagnosis only** is specified.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'instances' => 'Instances',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAutoSqlOptimizeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
