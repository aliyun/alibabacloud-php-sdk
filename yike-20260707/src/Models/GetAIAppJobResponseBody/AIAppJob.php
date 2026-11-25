<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\GetAIAppJobResponseBody;

use AlibabaCloud\Dara\Model;

class AIAppJob extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $nodeResults;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'jobId' => 'JobId',
        'nodeResults' => 'NodeResults',
        'outputs' => 'Outputs',
        'status' => 'Status',
        'userData' => 'UserData',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->nodeResults) {
            $res['NodeResults'] = $this->nodeResults;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['NodeResults'])) {
            $model->nodeResults = $map['NodeResults'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
