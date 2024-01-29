<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob\subJobList;
use AlibabaCloud\Tea\Model;

class editingBatchJob extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $editingConfig;

    /**
     * @example {
     * "ErrorCode": "InvalidMaterial.NotFound",
     * "ErrorMessage": "The specified clips id not found:[\"****30d0b5e871eebb2ff7f6c75a****\"]"
     * }
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @example ****b6b2750d4308892ac3330238****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {
     * }
     * @var string
     */
    public $outputConfig;

    /**
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @var subJobList[]
     */
    public $subJobList;

    /**
     * @example {"NotifyAddress":"http://xx.xx.xxx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'editingConfig' => 'EditingConfig',
        'extend'        => 'Extend',
        'inputConfig'   => 'InputConfig',
        'jobId'         => 'JobId',
        'outputConfig'  => 'OutputConfig',
        'status'        => 'Status',
        'subJobList'    => 'SubJobList',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subJobList) {
            $res['SubJobList'] = [];
            if (null !== $this->subJobList && \is_array($this->subJobList)) {
                $n = 0;
                foreach ($this->subJobList as $item) {
                    $res['SubJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingBatchJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubJobList'])) {
            if (!empty($map['SubJobList'])) {
                $model->subJobList = [];
                $n                 = 0;
                foreach ($map['SubJobList'] as $item) {
                    $model->subJobList[$n++] = null !== $item ? subJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
