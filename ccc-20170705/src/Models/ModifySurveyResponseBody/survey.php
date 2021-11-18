<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyResponseBody\survey\asrCustomModel;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyResponseBody\survey\flow;
use AlibabaCloud\Tea\Model;

class survey extends Model
{
    /**
     * @var asrCustomModel
     */
    public $asrCustomModel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var flow
     */
    public $flow;

    /**
     * @var string
     */
    public $globalQuestions;

    /**
     * @var string
     */
    public $hotWords;

    /**
     * @var string
     */
    public $id;

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
    public $scenarioUuid;

    /**
     * @var string
     */
    public $speechOptimizationParam;
    protected $_name = [
        'asrCustomModel'          => 'AsrCustomModel',
        'description'             => 'Description',
        'flow'                    => 'Flow',
        'globalQuestions'         => 'GlobalQuestions',
        'hotWords'                => 'HotWords',
        'id'                      => 'Id',
        'name'                    => 'Name',
        'role'                    => 'Role',
        'round'                   => 'Round',
        'scenarioUuid'            => 'ScenarioUuid',
        'speechOptimizationParam' => 'SpeechOptimizationParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrCustomModel) {
            $res['AsrCustomModel'] = null !== $this->asrCustomModel ? $this->asrCustomModel->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flow) {
            $res['Flow'] = null !== $this->flow ? $this->flow->toMap() : null;
        }
        if (null !== $this->globalQuestions) {
            $res['GlobalQuestions'] = $this->globalQuestions;
        }
        if (null !== $this->hotWords) {
            $res['HotWords'] = $this->hotWords;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->scenarioUuid) {
            $res['ScenarioUuid'] = $this->scenarioUuid;
        }
        if (null !== $this->speechOptimizationParam) {
            $res['SpeechOptimizationParam'] = $this->speechOptimizationParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return survey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrCustomModel'])) {
            $model->asrCustomModel = asrCustomModel::fromMap($map['AsrCustomModel']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Flow'])) {
            $model->flow = flow::fromMap($map['Flow']);
        }
        if (isset($map['GlobalQuestions'])) {
            $model->globalQuestions = $map['GlobalQuestions'];
        }
        if (isset($map['HotWords'])) {
            $model->hotWords = $map['HotWords'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['ScenarioUuid'])) {
            $model->scenarioUuid = $map['ScenarioUuid'];
        }
        if (isset($map['SpeechOptimizationParam'])) {
            $model->speechOptimizationParam = $map['SpeechOptimizationParam'];
        }

        return $model;
    }
}
