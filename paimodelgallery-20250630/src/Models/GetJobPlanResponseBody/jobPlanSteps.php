<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\GetJobPlanResponseBody;

use AlibabaCloud\Dara\Model;

class jobPlanSteps extends Model
{
    /**
     * @var string
     */
    public $jobPlanStepId;

    /**
     * @var string
     */
    public $jobPlanStepName;

    /**
     * @var mixed[]
     */
    public $jobPlanStepSpec;

    /**
     * @var string
     */
    public $jobPlanStepType;
    protected $_name = [
        'jobPlanStepId' => 'JobPlanStepId',
        'jobPlanStepName' => 'JobPlanStepName',
        'jobPlanStepSpec' => 'JobPlanStepSpec',
        'jobPlanStepType' => 'JobPlanStepType',
    ];

    public function validate()
    {
        if (\is_array($this->jobPlanStepSpec)) {
            Model::validateArray($this->jobPlanStepSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobPlanStepId) {
            $res['JobPlanStepId'] = $this->jobPlanStepId;
        }

        if (null !== $this->jobPlanStepName) {
            $res['JobPlanStepName'] = $this->jobPlanStepName;
        }

        if (null !== $this->jobPlanStepSpec) {
            if (\is_array($this->jobPlanStepSpec)) {
                $res['JobPlanStepSpec'] = [];
                foreach ($this->jobPlanStepSpec as $key1 => $value1) {
                    $res['JobPlanStepSpec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->jobPlanStepType) {
            $res['JobPlanStepType'] = $this->jobPlanStepType;
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
        if (isset($map['JobPlanStepId'])) {
            $model->jobPlanStepId = $map['JobPlanStepId'];
        }

        if (isset($map['JobPlanStepName'])) {
            $model->jobPlanStepName = $map['JobPlanStepName'];
        }

        if (isset($map['JobPlanStepSpec'])) {
            if (!empty($map['JobPlanStepSpec'])) {
                $model->jobPlanStepSpec = [];
                foreach ($map['JobPlanStepSpec'] as $key1 => $value1) {
                    $model->jobPlanStepSpec[$key1] = $value1;
                }
            }
        }

        if (isset($map['JobPlanStepType'])) {
            $model->jobPlanStepType = $map['JobPlanStepType'];
        }

        return $model;
    }
}
