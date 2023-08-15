<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody;

use AlibabaCloud\Tea\Model;

class restoreSummary extends Model
{
    /**
     * @example 2020-11-05T06:45:51Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 20201105144514
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 2020-11-04T05:15:00Z
     *
     * @var string
     */
    public $restoreToDate;

    /**
     * @example 2020-11-05T06:45:14Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $state;

    /**
     * @example ld-m5e2t34kr54wgxxxx
     *
     * @var string
     */
    public $targetCluster;
    protected $_name = [
        'endTime'       => 'EndTime',
        'recordId'      => 'RecordId',
        'restoreToDate' => 'RestoreToDate',
        'startTime'     => 'StartTime',
        'state'         => 'State',
        'targetCluster' => 'TargetCluster',
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

    /**
     * @param array $map
     *
     * @return restoreSummary
     */
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
