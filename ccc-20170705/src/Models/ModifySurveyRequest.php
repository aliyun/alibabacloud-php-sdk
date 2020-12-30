<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifySurveyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $surveyId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowJson;

    /**
     * @var string
     */
    public $corpora;

    /**
     * @var string
     */
    public $speechOptimizationParam;

    /**
     * @var string
     */
    public $globalQuestions;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $round;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'surveyId'                => 'SurveyId',
        'scenarioId'              => 'ScenarioId',
        'name'                    => 'Name',
        'description'             => 'Description',
        'flowId'                  => 'FlowId',
        'flowJson'                => 'FlowJson',
        'corpora'                 => 'Corpora',
        'speechOptimizationParam' => 'SpeechOptimizationParam',
        'globalQuestions'         => 'GlobalQuestions',
        'role'                    => 'Role',
        'round'                   => 'Round',
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
        if (null !== $this->surveyId) {
            $res['SurveyId'] = $this->surveyId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowJson) {
            $res['FlowJson'] = $this->flowJson;
        }
        if (null !== $this->corpora) {
            $res['Corpora'] = $this->corpora;
        }
        if (null !== $this->speechOptimizationParam) {
            $res['SpeechOptimizationParam'] = $this->speechOptimizationParam;
        }
        if (null !== $this->globalQuestions) {
            $res['GlobalQuestions'] = $this->globalQuestions;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySurveyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SurveyId'])) {
            $model->surveyId = $map['SurveyId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowJson'])) {
            $model->flowJson = $map['FlowJson'];
        }
        if (isset($map['Corpora'])) {
            $model->corpora = $map['Corpora'];
        }
        if (isset($map['SpeechOptimizationParam'])) {
            $model->speechOptimizationParam = $map['SpeechOptimizationParam'];
        }
        if (isset($map['GlobalQuestions'])) {
            $model->globalQuestions = $map['GlobalQuestions'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }

        return $model;
    }
}
