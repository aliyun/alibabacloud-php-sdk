<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceUpgradeHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class upgradeHistory extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $fromVersion;

    /**
     * @var string
     */
    public $results;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $toVersion;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $upgradeHistoryId;
    protected $_name = [
        'endTime' => 'EndTime',
        'fromVersion' => 'FromVersion',
        'results' => 'Results',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'toVersion' => 'ToVersion',
        'type' => 'Type',
        'upgradeHistoryId' => 'UpgradeHistoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
