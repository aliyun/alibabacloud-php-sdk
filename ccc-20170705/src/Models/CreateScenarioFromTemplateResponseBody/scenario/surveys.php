<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateResponseBody\scenario;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateResponseBody\scenario\surveys\intents;
use AlibabaCloud\Tea\Model;

class surveys extends Model
{
    /**
     * @var string
     */
    public $beebotId;

    /**
     * @var intents[]
     */
    public $intents;

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
    public $surveyDescription;

    /**
     * @var string
     */
    public $surveyId;

    /**
     * @var string
     */
    public $surveyName;
    protected $_name = [
        'beebotId'          => 'BeebotId',
        'intents'           => 'Intents',
        'role'              => 'Role',
        'round'             => 'Round',
        'surveyDescription' => 'SurveyDescription',
        'surveyId'          => 'SurveyId',
        'surveyName'        => 'SurveyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beebotId) {
            $res['BeebotId'] = $this->beebotId;
        }
        if (null !== $this->intents) {
            $res['Intents'] = [];
            if (null !== $this->intents && \is_array($this->intents)) {
                $n = 0;
                foreach ($this->intents as $item) {
                    $res['Intents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->surveyDescription) {
            $res['SurveyDescription'] = $this->surveyDescription;
        }
        if (null !== $this->surveyId) {
            $res['SurveyId'] = $this->surveyId;
        }
        if (null !== $this->surveyName) {
            $res['SurveyName'] = $this->surveyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return surveys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeebotId'])) {
            $model->beebotId = $map['BeebotId'];
        }
        if (isset($map['Intents'])) {
            if (!empty($map['Intents'])) {
                $model->intents = [];
                $n              = 0;
                foreach ($map['Intents'] as $item) {
                    $model->intents[$n++] = null !== $item ? intents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['SurveyDescription'])) {
            $model->surveyDescription = $map['SurveyDescription'];
        }
        if (isset($map['SurveyId'])) {
            $model->surveyId = $map['SurveyId'];
        }
        if (isset($map['SurveyName'])) {
            $model->surveyName = $map['SurveyName'];
        }

        return $model;
    }
}
