<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateLinkJobRequest extends Model
{
    /**
     * @description 是否自动确认
     *
     * @var bool
     */
    public $autoConfirm;

    /**
     * @description 双端链路转换策略
     *
     * @var string
     */
    public $doubleConvertStrategy;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @description 任务ID
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 单端链路发现策略
     *
     * @var string
     */
    public $singleStrategy;
    protected $_name = [
        'autoConfirm'           => 'AutoConfirm',
        'doubleConvertStrategy' => 'DoubleConvertStrategy',
        'instanceId'            => 'InstanceId',
        'jobId'                 => 'JobId',
        'singleStrategy'        => 'SingleStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoConfirm) {
            $res['AutoConfirm'] = $this->autoConfirm;
        }
        if (null !== $this->doubleConvertStrategy) {
            $res['DoubleConvertStrategy'] = $this->doubleConvertStrategy;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->singleStrategy) {
            $res['SingleStrategy'] = $this->singleStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLinkJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoConfirm'])) {
            $model->autoConfirm = $map['AutoConfirm'];
        }
        if (isset($map['DoubleConvertStrategy'])) {
            $model->doubleConvertStrategy = $map['DoubleConvertStrategy'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SingleStrategy'])) {
            $model->singleStrategy = $map['SingleStrategy'];
        }

        return $model;
    }
}
