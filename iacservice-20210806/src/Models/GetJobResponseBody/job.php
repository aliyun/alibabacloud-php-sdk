<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job\assertCheckDetail;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job\config;
use AlibabaCloud\SDK\IaCService\V20210806\Models\JobStatusDetailValue;

class job extends Model
{
    /**
     * @var assertCheckDetail[]
     */
    public $assertCheckDetail;

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
     * @var mixed[]
     */
    public $downloadUrl;

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
    public $jobType;

    /**
     * @var mixed[]
     */
    public $logFile;

    /**
     * @var string
     */
    public $output;

    /**
     * @var mixed
     */
    public $outputJsonPlan;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $status;

    /**
     * @var JobStatusDetailValue[]
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $terraformProviderVersion;
    protected $_name = [
        'assertCheckDetail' => 'assertCheckDetail',
        'config' => 'config',
        'createTime' => 'createTime',
        'description' => 'description',
        'downloadUrl' => 'downloadUrl',
        'elapsedTime' => 'elapsedTime',
        'executeType' => 'executeType',
        'isPassAssertCheck' => 'isPassAssertCheck',
        'jobId' => 'jobId',
        'jobType' => 'jobType',
        'logFile' => 'logFile',
        'output' => 'output',
        'outputJsonPlan' => 'outputJsonPlan',
        'parameters' => 'parameters',
        'status' => 'status',
        'statusDetail' => 'statusDetail',
        'taskId' => 'taskId',
        'taskType' => 'taskType',
        'terraformProviderVersion' => 'terraformProviderVersion',
    ];

    public function validate()
    {
        if (\is_array($this->assertCheckDetail)) {
            Model::validateArray($this->assertCheckDetail);
        }
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->downloadUrl)) {
            Model::validateArray($this->downloadUrl);
        }
        if (\is_array($this->logFile)) {
            Model::validateArray($this->logFile);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->statusDetail)) {
            Model::validateArray($this->statusDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertCheckDetail) {
            if (\is_array($this->assertCheckDetail)) {
                $res['assertCheckDetail'] = [];
                $n1 = 0;
                foreach ($this->assertCheckDetail as $item1) {
                    $res['assertCheckDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            if (\is_array($this->downloadUrl)) {
                $res['downloadUrl'] = [];
                foreach ($this->downloadUrl as $key1 => $value1) {
                    $res['downloadUrl'][$key1] = $value1;
                }
            }
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

        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }

        if (null !== $this->logFile) {
            if (\is_array($this->logFile)) {
                $res['logFile'] = [];
                foreach ($this->logFile as $key1 => $value1) {
                    $res['logFile'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->output) {
            $res['output'] = $this->output;
        }

        if (null !== $this->outputJsonPlan) {
            $res['outputJsonPlan'] = $this->outputJsonPlan;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
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

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['assertCheckDetail'])) {
            if (!empty($map['assertCheckDetail'])) {
                $model->assertCheckDetail = [];
                $n1 = 0;
                foreach ($map['assertCheckDetail'] as $item1) {
                    $model->assertCheckDetail[$n1] = assertCheckDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloadUrl'])) {
            if (!empty($map['downloadUrl'])) {
                $model->downloadUrl = [];
                foreach ($map['downloadUrl'] as $key1 => $value1) {
                    $model->downloadUrl[$key1] = $value1;
                }
            }
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

        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }

        if (isset($map['logFile'])) {
            if (!empty($map['logFile'])) {
                $model->logFile = [];
                foreach ($map['logFile'] as $key1 => $value1) {
                    $model->logFile[$key1] = $value1;
                }
            }
        }

        if (isset($map['output'])) {
            $model->output = $map['output'];
        }

        if (isset($map['outputJsonPlan'])) {
            $model->outputJsonPlan = $map['outputJsonPlan'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusDetail'])) {
            if (!empty($map['statusDetail'])) {
                $model->statusDetail = [];
                foreach ($map['statusDetail'] as $key1 => $value1) {
                    $model->statusDetail[$key1] = JobStatusDetailValue::fromMap($value1);
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        return $model;
    }
}
