<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponseBody;

use AlibabaCloud\Tea\Model;

class typeList extends Model
{
    /**
     * @description The number of pending events.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The task type of pending events. Valid values:
     *
     *   **DatabaseSoftwareUpgrading**: database software upgrades
     *   **DatabaseHardwareMaintenance**: hardware maintenance and upgrades
     *   **DatabaseStorageUpgrading**: database storage upgrades
     *   **DatabaseProxyUpgrading**: minor version upgrades of the proxy
     *
     * @example DatabaseSoftwareUpgrading
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'count'    => 'Count',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
