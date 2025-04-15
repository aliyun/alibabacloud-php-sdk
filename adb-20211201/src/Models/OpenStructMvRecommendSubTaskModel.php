<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructMvRecommendSubTaskModel extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $scanQueriesCount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $subQueriesCount;

    /**
     * @var int
     */
    public $subtaskId;
    protected $_name = [
        'endTime' => 'EndTime',
        'scanQueriesCount' => 'ScanQueriesCount',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'subQueriesCount' => 'SubQueriesCount',
        'subtaskId' => 'SubtaskId',
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

        if (null !== $this->scanQueriesCount) {
            $res['ScanQueriesCount'] = $this->scanQueriesCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subQueriesCount) {
            $res['SubQueriesCount'] = $this->subQueriesCount;
        }

        if (null !== $this->subtaskId) {
            $res['SubtaskId'] = $this->subtaskId;
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

        if (isset($map['ScanQueriesCount'])) {
            $model->scanQueriesCount = $map['ScanQueriesCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubQueriesCount'])) {
            $model->subQueriesCount = $map['SubQueriesCount'];
        }

        if (isset($map['SubtaskId'])) {
            $model->subtaskId = $map['SubtaskId'];
        }

        return $model;
    }
}
