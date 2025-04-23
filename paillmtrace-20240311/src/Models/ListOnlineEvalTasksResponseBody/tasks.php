<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksResponseBody\tasks\filters;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ModelConfig;

class tasks extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var EvaluationConfig
     */
    public $evaluationConfig;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtEndTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var ModelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $samplingFrequencyMinutes;

    /**
     * @var int
     */
    public $samplingRatio;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'appName' => 'AppName',
        'description' => 'Description',
        'evaluationConfig' => 'EvaluationConfig',
        'filters' => 'Filters',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtEndTime' => 'GmtEndTime',
        'gmtStartTime' => 'GmtStartTime',
        'id' => 'Id',
        'modelConfig' => 'ModelConfig',
        'name' => 'Name',
        'samplingFrequencyMinutes' => 'SamplingFrequencyMinutes',
        'samplingRatio' => 'SamplingRatio',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->evaluationConfig) {
            $this->evaluationConfig->validate();
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->evaluationConfig) {
            $res['EvaluationConfig'] = null !== $this->evaluationConfig ? $this->evaluationConfig->toArray($noStream) : $this->evaluationConfig;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->samplingFrequencyMinutes) {
            $res['SamplingFrequencyMinutes'] = $this->samplingFrequencyMinutes;
        }

        if (null !== $this->samplingRatio) {
            $res['SamplingRatio'] = $this->samplingRatio;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EvaluationConfig'])) {
            $model->evaluationConfig = EvaluationConfig::fromMap($map['EvaluationConfig']);
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = ModelConfig::fromMap($map['ModelConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SamplingFrequencyMinutes'])) {
            $model->samplingFrequencyMinutes = $map['SamplingFrequencyMinutes'];
        }

        if (isset($map['SamplingRatio'])) {
            $model->samplingRatio = $map['SamplingRatio'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
