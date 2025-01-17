<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob\subJobList;

class editingBatchJob extends Model
{
    /**
     * @var string
     */
    public $completeTime;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $editingConfig;
    /**
     * @var string
     */
    public $extend;
    /**
     * @var string
     */
    public $inputConfig;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobType;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $outputConfig;
    /**
     * @var string
     */
    public $status;
    /**
     * @var subJobList[]
     */
    public $subJobList;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'completeTime'  => 'CompleteTime',
        'createTime'    => 'CreateTime',
        'editingConfig' => 'EditingConfig',
        'extend'        => 'Extend',
        'inputConfig'   => 'InputConfig',
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'modifiedTime'  => 'ModifiedTime',
        'outputConfig'  => 'OutputConfig',
        'status'        => 'Status',
        'subJobList'    => 'SubJobList',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->subJobList)) {
            Model::validateArray($this->subJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subJobList) {
            if (\is_array($this->subJobList)) {
                $res['SubJobList'] = [];
                $n1                = 0;
                foreach ($this->subJobList as $item1) {
                    $res['SubJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubJobList'])) {
            if (!empty($map['SubJobList'])) {
                $model->subJobList = [];
                $n1                = 0;
                foreach ($map['SubJobList'] as $item1) {
                    $model->subJobList[$n1++] = subJobList::fromMap($item1);
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
