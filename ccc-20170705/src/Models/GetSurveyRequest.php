<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class GetSurveyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $surveyId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scenarioId' => 'ScenarioId',
        'surveyId'   => 'SurveyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->surveyId) {
            $res['SurveyId'] = $this->surveyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSurveyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['SurveyId'])) {
            $model->surveyId = $map['SurveyId'];
        }

        return $model;
    }
}
