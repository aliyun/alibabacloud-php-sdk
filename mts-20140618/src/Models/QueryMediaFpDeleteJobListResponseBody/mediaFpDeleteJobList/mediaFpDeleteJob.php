<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponseBody\mediaFpDeleteJobList;

use AlibabaCloud\Tea\Model;

class mediaFpDeleteJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

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
    public $fpDBId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'finishTime'   => 'FinishTime',
        'primaryKey'   => 'PrimaryKey',
        'state'        => 'State',
        'userData'     => 'UserData',
        'code'         => 'Code',
        'message'      => 'Message',
        'pipelineId'   => 'PipelineId',
        'fpDBId'       => 'FpDBId',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaFpDeleteJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
