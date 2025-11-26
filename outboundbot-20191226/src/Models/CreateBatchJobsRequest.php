<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateBatchJobsRequest extends Model
{
    /**
     * @var string
     */
    public $batchJobDescription;

    /**
     * @var string
     */
    public $batchJobName;

    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $strategyJson;

    /**
     * @var bool
     */
    public $submitted;
    protected $_name = [
        'batchJobDescription' => 'BatchJobDescription',
        'batchJobName' => 'BatchJobName',
        'callingNumber' => 'CallingNumber',
        'instanceId' => 'InstanceId',
        'jobFilePath' => 'JobFilePath',
        'scenarioId' => 'ScenarioId',
        'scriptId' => 'ScriptId',
        'strategyJson' => 'StrategyJson',
        'submitted' => 'Submitted',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumber)) {
            Model::validateArray($this->callingNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchJobDescription) {
            $res['BatchJobDescription'] = $this->batchJobDescription;
        }

        if (null !== $this->batchJobName) {
            $res['BatchJobName'] = $this->batchJobName;
        }

        if (null !== $this->callingNumber) {
            if (\is_array($this->callingNumber)) {
                $res['CallingNumber'] = [];
                $n1 = 0;
                foreach ($this->callingNumber as $item1) {
                    $res['CallingNumber'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchJobDescription'])) {
            $model->batchJobDescription = $map['BatchJobDescription'];
        }

        if (isset($map['BatchJobName'])) {
            $model->batchJobName = $map['BatchJobName'];
        }

        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = [];
                $n1 = 0;
                foreach ($map['CallingNumber'] as $item1) {
                    $model->callingNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
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
