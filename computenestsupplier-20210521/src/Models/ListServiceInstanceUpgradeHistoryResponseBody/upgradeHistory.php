<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceUpgradeHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class upgradeHistory extends Model
{
    /**
     * @description End time of the upgrade.
     *
     * @example 2022-04-26T09:09:51Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Version before the upgrade.
     *
     * @example 1
     *
     * @var string
     */
    public $fromVersion;

    /**
     * @description Upgrade result.
     *
     * @example {\\"PreUpgradeExecutionId\\":\\"exec-123\\"}
     *
     * @var string
     */
    public $results;

    /**
     * @description Start time of the upgrade.
     *
     * @example 2022-04-26T08:09:51Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Upgrade status. Possible values:
     *
     * - UpgradeFailed: Upgrade failed.
     * @example UpgradeFailed
     *
     * @var string
     */
    public $status;

    /**
     * @description Version after the upgrade.
     *
     * @example 3
     *
     * @var string
     */
    public $toVersion;

    /**
     * @description Upgrade type.
     * - Rollback
     * @example Upgrade
     *
     * @var string
     */
    public $type;

    /**
     * @description Upgrade history ID.
     *
     * @example uh-1b21d65f75e94fa09745
     *
     * @var string
     */
    public $upgradeHistoryId;
    protected $_name = [
        'endTime'          => 'EndTime',
        'fromVersion'      => 'FromVersion',
        'results'          => 'Results',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'toVersion'        => 'ToVersion',
        'type'             => 'Type',
        'upgradeHistoryId' => 'UpgradeHistoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fromVersion) {
            $res['FromVersion'] = $this->fromVersion;
        }
        if (null !== $this->results) {
            $res['Results'] = $this->results;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toVersion) {
            $res['ToVersion'] = $this->toVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->upgradeHistoryId) {
            $res['UpgradeHistoryId'] = $this->upgradeHistoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FromVersion'])) {
            $model->fromVersion = $map['FromVersion'];
        }
        if (isset($map['Results'])) {
            $model->results = $map['Results'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToVersion'])) {
            $model->toVersion = $map['ToVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpgradeHistoryId'])) {
            $model->upgradeHistoryId = $map['UpgradeHistoryId'];
        }

        return $model;
    }
}
