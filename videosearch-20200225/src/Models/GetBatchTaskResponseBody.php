<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTaskResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchTaskId;

    /**
     * @example 1618396147
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $processMessage;

    /**
     * @example xxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $subTaskDetail;
    protected $_name = [
        'batchTaskId'    => 'BatchTaskId',
        'modifiedTime'   => 'ModifiedTime',
        'processMessage' => 'ProcessMessage',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
        'subTaskDetail'  => 'SubTaskDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskId) {
            $res['BatchTaskId'] = $this->batchTaskId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processMessage) {
            $res['ProcessMessage'] = $this->processMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subTaskDetail) {
            $res['SubTaskDetail'] = $this->subTaskDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskId'])) {
            $model->batchTaskId = $map['BatchTaskId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessMessage'])) {
            $model->processMessage = $map['ProcessMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubTaskDetail'])) {
            $model->subTaskDetail = $map['SubTaskDetail'];
        }

        return $model;
    }
}
