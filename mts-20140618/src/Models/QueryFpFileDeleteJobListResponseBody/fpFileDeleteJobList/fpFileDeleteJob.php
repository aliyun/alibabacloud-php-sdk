<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\fpFileDeleteJobList;

use AlibabaCloud\Tea\Model;

class fpFileDeleteJob extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $fileIds;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'         => 'Code',
        'creationTime' => 'CreationTime',
        'fileIds'      => 'FileIds',
        'finishTime'   => 'FinishTime',
        'fpDBId'       => 'FpDBId',
        'id'           => 'Id',
        'message'      => 'Message',
        'pipelineId'   => 'PipelineId',
        'status'       => 'Status',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpFileDeleteJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FileIds'])) {
            $model->fileIds = $map['FileIds'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
