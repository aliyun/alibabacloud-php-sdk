<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsFetchMetadataJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-12-16 19:10:07
     *
     * @var string
     */
    public $endTime;

    /**
     * @example unexpected exception
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 1000002
     *
     * @var int
     */
    public $id;

    /**
     * @example 5000
     *
     * @var float
     */
    public $progress;

    /**
     * @example {"databases":5,"tables":75,"partitions":215}
     *
     * @var string
     */
    public $result;

    /**
     * @example 2000015
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example 2024-12-16 19:09:37
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SCAN_DOING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'endTime',
        'errorMsg' => 'errorMsg',
        'id' => 'id',
        'progress' => 'progress',
        'result' => 'result',
        'sourceId' => 'sourceId',
        'startTime' => 'startTime',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
