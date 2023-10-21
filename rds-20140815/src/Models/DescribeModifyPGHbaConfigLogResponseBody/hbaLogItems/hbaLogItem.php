<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem\afterHbaItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem\beforeHbaItems;
use AlibabaCloud\Tea\Model;

class hbaLogItem extends Model
{
    /**
     * @description The configurations of the pg_hba.conf file after modification.
     *
     * @var afterHbaItems
     */
    public $afterHbaItems;

    /**
     * @description The configurations of the pg_hba.conf file before modification.
     *
     * @var beforeHbaItems
     */
    public $beforeHbaItems;

    /**
     * @description The status of the modification.
     *
     *   **success**: The modification is successful.
     *   **failed**: The modification failed.
     *   **setting**: The modification is being applied.
     *
     * @example success
     *
     * @var string
     */
    public $modifyStatus;

    /**
     * @description The time when the pg_hba.conf file was modified. The time is displayed in UTC.
     *
     * @example 2021-11-25T06:00:40Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The reason why the modification failed.
     *
     * @example null
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'afterHbaItems'  => 'AfterHbaItems',
        'beforeHbaItems' => 'BeforeHbaItems',
        'modifyStatus'   => 'ModifyStatus',
        'modifyTime'     => 'ModifyTime',
        'statusReason'   => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterHbaItems) {
            $res['AfterHbaItems'] = null !== $this->afterHbaItems ? $this->afterHbaItems->toMap() : null;
        }
        if (null !== $this->beforeHbaItems) {
            $res['BeforeHbaItems'] = null !== $this->beforeHbaItems ? $this->beforeHbaItems->toMap() : null;
        }
        if (null !== $this->modifyStatus) {
            $res['ModifyStatus'] = $this->modifyStatus;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hbaLogItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterHbaItems'])) {
            $model->afterHbaItems = afterHbaItems::fromMap($map['AfterHbaItems']);
        }
        if (isset($map['BeforeHbaItems'])) {
            $model->beforeHbaItems = beforeHbaItems::fromMap($map['BeforeHbaItems']);
        }
        if (isset($map['ModifyStatus'])) {
            $model->modifyStatus = $map['ModifyStatus'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
