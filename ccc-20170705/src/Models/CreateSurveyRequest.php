<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateSurveyRequest extends Model
{
    /**
     * @var string
     */
    public $corpora;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowJson;

    /**
     * @var string
     */
    public $globalQuestions;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $round;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $speechOptimizationParam;
    protected $_name = [
        'corpora'                 => 'Corpora',
        'description'             => 'Description',
        'flowJson'                => 'FlowJson',
        'globalQuestions'         => 'GlobalQuestions',
        'instanceId'              => 'InstanceId',
        'name'                    => 'Name',
        'role'                    => 'Role',
        'round'                   => 'Round',
        'scenarioId'              => 'ScenarioId',
        'speechOptimizationParam' => 'SpeechOptimizationParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpora) {
            $res['Corpora'] = $this->corpora;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowJson) {
            $res['FlowJson'] = $this->flowJson;
        }
        if (null !== $this->globalQuestions) {
            $res['GlobalQuestions'] = $this->globalQuestions;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->speechOptimizationParam) {
            $res['SpeechOptimizationParam'] = $this->speechOptimizationParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSurveyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Corpora'])) {
            $model->corpora = $map['Corpora'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowJson'])) {
            $model->flowJson = $map['FlowJson'];
        }
        if (isset($map['GlobalQuestions'])) {
            $model->globalQuestions = $map['GlobalQuestions'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['SpeechOptimizationParam'])) {
            $model->speechOptimizationParam = $map['SpeechOptimizationParam'];
        }

        return $model;
    }
}
