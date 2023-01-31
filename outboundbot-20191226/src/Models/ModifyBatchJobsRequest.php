<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyBatchJobsRequest extends Model
{
    /**
     * @var string
     */
    public $batchJobName;

    /**
     * @example ["95187"]
     *
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 52e80b02-0126-4556-a1e6-ef5b3747ed53/a9a3ddc7-d7d7-48cd-82b5-b31bb5510e71_2a66f8ad-dfbb-4980-9b84-439171295a11.xlsx
     *
     * @var string
     */
    public $jobFilePath;

    /**
     * @example c6a668d1-3145-4048-9101-cb3678bb8884
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example c6a668d1-3145-4048-9101-cb3678bb8884
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example 7d820242-f4f0-4d2e-ae35-b424c41cbc5b
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $strategyJson;

    /**
     * @example false
     *
     * @var bool
     */
    public $submitted;
    protected $_name = [
        'batchJobName'  => 'BatchJobName',
        'callingNumber' => 'CallingNumber',
        'description'   => 'Description',
        'instanceId'    => 'InstanceId',
        'jobFilePath'   => 'JobFilePath',
        'jobGroupId'    => 'JobGroupId',
        'scenarioId'    => 'ScenarioId',
        'scriptId'      => 'ScriptId',
        'strategyJson'  => 'StrategyJson',
        'submitted'     => 'Submitted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchJobName) {
            $res['BatchJobName'] = $this->batchJobName;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }
        if (null !== $this->submitted) {
            $res['Submitted'] = $this->submitted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBatchJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchJobName'])) {
            $model->batchJobName = $map['BatchJobName'];
        }
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }
        if (isset($map['Submitted'])) {
            $model->submitted = $map['Submitted'];
        }

        return $model;
    }
}
