<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceUpgradeHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class upgradeHistory extends Model
{
    /**
     * @example 2022-04-26T09:09:51Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $fromVersion;

    /**
     * @example {\\"PreUpgradeExecutionId\\":\\"exec-123\\"}
     *
     * @var string
     */
    public $results;

    /**
     * @example 2022-04-26T08:09:51Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example UpgradeFailed
     *
     * @var string
     */
    public $status;

    /**
     * @example 3
     *
     * @var string
     */
    public $toVersion;

    /**
     * @example Upgrade
     *
     * @var string
     */
    public $type;

    /**
     * @example exec-123
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
