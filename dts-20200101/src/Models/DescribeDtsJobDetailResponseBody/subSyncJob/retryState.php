<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;

use AlibabaCloud\Tea\Model;

class retryState extends Model
{
    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description 任务ID
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 最大重试时间,单位秒
     *
     * @var int
     */
    public $maxRetryTime;

    /**
     * @description 模块名称 reader/store/writer/full/struct
     *
     * @var string
     */
    public $module;

    /**
     * @description 已重试次数
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description srcDB/destDB/metaDB/dstore
     *
     * @var string
     */
    public $retryTarget;

    /**
     * @description 已重试时间,单位秒
     *
     * @var int
     */
    public $retryTime;

    /**
     * @description 是否重试中
     *
     * @var bool
     */
    public $retrying;
    protected $_name = [
        'errMsg'       => 'ErrMsg',
        'jobId'        => 'JobId',
        'maxRetryTime' => 'MaxRetryTime',
        'module'       => 'Module',
        'retryCount'   => 'RetryCount',
        'retryTarget'  => 'RetryTarget',
        'retryTime'    => 'RetryTime',
        'retrying'     => 'Retrying',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->maxRetryTime) {
            $res['MaxRetryTime'] = $this->maxRetryTime;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryTarget) {
            $res['RetryTarget'] = $this->retryTarget;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }
        if (null !== $this->retrying) {
            $res['Retrying'] = $this->retrying;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MaxRetryTime'])) {
            $model->maxRetryTime = $map['MaxRetryTime'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryTarget'])) {
            $model->retryTarget = $map['RetryTarget'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }
        if (isset($map['Retrying'])) {
            $model->retrying = $map['Retrying'];
        }

        return $model;
    }
}
