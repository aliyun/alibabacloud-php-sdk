<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class HandleActiveSQLRecordRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the operation on the process ID. Valid values:
     *
     *   **0**: cancel.
     *   **1**: terminate.
     *   **2**: forcefully terminate.
     *
     * @example 0
     *
     * @var int
     */
    public $operateType;

    /**
     * @description The process IDs. A process ID is a unique identifier of a query.
     *
     * This parameter is required.
     *
     * @example "3003925,3003928"
     *
     * @var string
     */
    public $pids;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'operateType' => 'OperateType',
        'pids' => 'Pids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleActiveSQLRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }

        return $model;
    }
}
