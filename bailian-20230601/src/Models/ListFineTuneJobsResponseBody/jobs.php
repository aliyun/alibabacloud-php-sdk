<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsResponseBody;

use AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsResponseBody\jobs\hyperParameters;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @example bailian-qwen-basic-v1
     *
     * @var string
     */
    public $baseModel;

    /**
     * @example bailian-qwen-basic-v1-ft-202307111653-d2d7dbff
     *
     * @var string
     */
    public $fineTunedModel;

    /**
     * @var hyperParameters
     */
    public $hyperParameters;

    /**
     * @example ft-202307181110-146c93bf
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @example - FAILED
     * - SUCCESSED
     * @var string
     */
    public $status;

    /**
     * @example https://broadscope-train-pre.oss-cn-beijing.aliyuncs.com/copus-train1686040661321.xlsx
     *
     * @var string[]
     */
    public $trainingFiles;

    /**
     * @var string
     */
    public $trainingType;

    /**
     * @example https://broadscope-train-pre.oss-cn-beijing.aliyuncs.com/copus-train1686040661321.xlsx
     *
     * @var string[]
     */
    public $validationFiles;
    protected $_name = [
        'baseModel'       => 'BaseModel',
        'fineTunedModel'  => 'FineTunedModel',
        'hyperParameters' => 'HyperParameters',
        'jobId'           => 'JobId',
        'message'         => 'Message',
        'modelName'       => 'ModelName',
        'status'          => 'Status',
        'trainingFiles'   => 'TrainingFiles',
        'trainingType'    => 'TrainingType',
        'validationFiles' => 'ValidationFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseModel) {
            $res['BaseModel'] = $this->baseModel;
        }
        if (null !== $this->fineTunedModel) {
            $res['FineTunedModel'] = $this->fineTunedModel;
        }
        if (null !== $this->hyperParameters) {
            $res['HyperParameters'] = null !== $this->hyperParameters ? $this->hyperParameters->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trainingFiles) {
            $res['TrainingFiles'] = $this->trainingFiles;
        }
        if (null !== $this->trainingType) {
            $res['TrainingType'] = $this->trainingType;
        }
        if (null !== $this->validationFiles) {
            $res['ValidationFiles'] = $this->validationFiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseModel'])) {
            $model->baseModel = $map['BaseModel'];
        }
        if (isset($map['FineTunedModel'])) {
            $model->fineTunedModel = $map['FineTunedModel'];
        }
        if (isset($map['HyperParameters'])) {
            $model->hyperParameters = hyperParameters::fromMap($map['HyperParameters']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrainingFiles'])) {
            if (!empty($map['TrainingFiles'])) {
                $model->trainingFiles = $map['TrainingFiles'];
            }
        }
        if (isset($map['TrainingType'])) {
            $model->trainingType = $map['TrainingType'];
        }
        if (isset($map['ValidationFiles'])) {
            if (!empty($map['ValidationFiles'])) {
                $model->validationFiles = $map['ValidationFiles'];
            }
        }

        return $model;
    }
}
