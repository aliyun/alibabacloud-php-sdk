<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody;

use AlibabaCloud\Dara\Model;

class restoreSummary extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $restoreToDate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $targetCluster;
    protected $_name = [
        'endTime' => 'EndTime',
        'recordId' => 'RecordId',
        'restoreToDate' => 'RestoreToDate',
        'startTime' => 'StartTime',
        'state' => 'State',
        'targetCluster' => 'TargetCluster',
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

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->restoreToDate) {
            $res['RestoreToDate'] = $this->restoreToDate;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->targetCluster) {
            $res['TargetCluster'] = $this->targetCluster;
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

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RestoreToDate'])) {
            $model->restoreToDate = $map['RestoreToDate'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TargetCluster'])) {
            $model->targetCluster = $map['TargetCluster'];
        }

        return $model;
    }
}
