<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\JobsStatusDetailValue;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponseBody\jobs\config;

class jobs extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $executeType;

    /**
     * @var bool
     */
    public $isPassAssertCheck;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var JobsStatusDetailValue[]
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $terraformProviderVersion;
    protected $_name = [
        'config' => 'config',
        'createTime' => 'createTime',
        'description' => 'description',
        'elapsedTime' => 'elapsedTime',
        'executeType' => 'executeType',
        'isPassAssertCheck' => 'isPassAssertCheck',
        'jobId' => 'jobId',
        'status' => 'status',
        'statusDetail' => 'statusDetail',
        'taskId' => 'taskId',
        'terraformProviderVersion' => 'terraformProviderVersion',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->statusDetail)) {
            Model::validateArray($this->statusDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->executeType) {
            $res['executeType'] = $this->executeType;
        }

        if (null !== $this->isPassAssertCheck) {
            $res['isPassAssertCheck'] = $this->isPassAssertCheck;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusDetail) {
            if (\is_array($this->statusDetail)) {
                $res['statusDetail'] = [];
                foreach ($this->statusDetail as $key1 => $value1) {
                    $res['statusDetail'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['executeType'])) {
            $model->executeType = $map['executeType'];
        }

        if (isset($map['isPassAssertCheck'])) {
            $model->isPassAssertCheck = $map['isPassAssertCheck'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusDetail'])) {
            if (!empty($map['statusDetail'])) {
                $model->statusDetail = [];
                foreach ($map['statusDetail'] as $key1 => $value1) {
                    $model->statusDetail[$key1] = JobsStatusDetailValue::fromMap($value1);
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        return $model;
    }
}
