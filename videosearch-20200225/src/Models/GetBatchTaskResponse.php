<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTaskResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $batchTaskId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $processMessage;

    /**
     * @var string
     */
    public $subTaskDetail;
    protected $_name = [
        'requestId'      => 'RequestId',
        'batchTaskId'    => 'BatchTaskId',
        'status'         => 'Status',
        'modifiedTime'   => 'ModifiedTime',
        'processMessage' => 'ProcessMessage',
        'subTaskDetail'  => 'SubTaskDetail',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('batchTaskId', $this->batchTaskId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('processMessage', $this->processMessage, true);
        Model::validateRequired('subTaskDetail', $this->subTaskDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->batchTaskId) {
            $res['BatchTaskId'] = $this->batchTaskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processMessage) {
            $res['ProcessMessage'] = $this->processMessage;
        }
        if (null !== $this->subTaskDetail) {
            $res['SubTaskDetail'] = $this->subTaskDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BatchTaskId'])) {
            $model->batchTaskId = $map['BatchTaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessMessage'])) {
            $model->processMessage = $map['ProcessMessage'];
        }
        if (isset($map['SubTaskDetail'])) {
            $model->subTaskDetail = $map['SubTaskDetail'];
        }

        return $model;
    }
}
