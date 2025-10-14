<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentIconUrl;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $agentScene;

    /**
     * @var string
     */
    public $characterAgeStage;

    /**
     * @var string
     */
    public $characterGender;

    /**
     * @var string
     */
    public $characterName;

    /**
     * @var string
     */
    public $extraDescription;

    /**
     * @var string
     */
    public $industry;
    protected $_name = [
        'agentIconUrl' => 'agentIconUrl',
        'agentName' => 'agentName',
        'agentScene' => 'agentScene',
        'characterAgeStage' => 'characterAgeStage',
        'characterGender' => 'characterGender',
        'characterName' => 'characterName',
        'extraDescription' => 'extraDescription',
        'industry' => 'industry',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIconUrl) {
            $res['agentIconUrl'] = $this->agentIconUrl;
        }

        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->agentScene) {
            $res['agentScene'] = $this->agentScene;
        }

        if (null !== $this->characterAgeStage) {
            $res['characterAgeStage'] = $this->characterAgeStage;
        }

        if (null !== $this->characterGender) {
            $res['characterGender'] = $this->characterGender;
        }

        if (null !== $this->characterName) {
            $res['characterName'] = $this->characterName;
        }

        if (null !== $this->extraDescription) {
            $res['extraDescription'] = $this->extraDescription;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
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
        if (isset($map['agentIconUrl'])) {
            $model->agentIconUrl = $map['agentIconUrl'];
        }

        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['agentScene'])) {
            $model->agentScene = $map['agentScene'];
        }

        if (isset($map['characterAgeStage'])) {
            $model->characterAgeStage = $map['characterAgeStage'];
        }

        if (isset($map['characterGender'])) {
            $model->characterGender = $map['characterGender'];
        }

        if (isset($map['characterName'])) {
            $model->characterName = $map['characterName'];
        }

        if (isset($map['extraDescription'])) {
            $model->extraDescription = $map['extraDescription'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        return $model;
    }
}
