<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAgentsResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentIconUrl;

    /**
     * @var string
     */
    public $agentId;

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
    public $characterName;

    /**
     * @var string
     */
    public $charactersDescription;

    /**
     * @var int
     */
    public $enableInteraction;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var bool
     */
    public $onlineSearch;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $referenceUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $textStyle;

    /**
     * @var string
     */
    public $viewer;
    protected $_name = [
        'agentIconUrl' => 'agentIconUrl',
        'agentId' => 'agentId',
        'agentName' => 'agentName',
        'agentScene' => 'agentScene',
        'characterAgeStage' => 'characterAgeStage',
        'characterName' => 'characterName',
        'charactersDescription' => 'charactersDescription',
        'enableInteraction' => 'enableInteraction',
        'industry' => 'industry',
        'onlineSearch' => 'onlineSearch',
        'owner' => 'owner',
        'referenceUrl' => 'referenceUrl',
        'status' => 'status',
        'textStyle' => 'textStyle',
        'viewer' => 'viewer',
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

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
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

        if (null !== $this->characterName) {
            $res['characterName'] = $this->characterName;
        }

        if (null !== $this->charactersDescription) {
            $res['charactersDescription'] = $this->charactersDescription;
        }

        if (null !== $this->enableInteraction) {
            $res['enableInteraction'] = $this->enableInteraction;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->onlineSearch) {
            $res['onlineSearch'] = $this->onlineSearch;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->referenceUrl) {
            $res['referenceUrl'] = $this->referenceUrl;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->textStyle) {
            $res['textStyle'] = $this->textStyle;
        }

        if (null !== $this->viewer) {
            $res['viewer'] = $this->viewer;
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

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
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

        if (isset($map['characterName'])) {
            $model->characterName = $map['characterName'];
        }

        if (isset($map['charactersDescription'])) {
            $model->charactersDescription = $map['charactersDescription'];
        }

        if (isset($map['enableInteraction'])) {
            $model->enableInteraction = $map['enableInteraction'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['onlineSearch'])) {
            $model->onlineSearch = $map['onlineSearch'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['referenceUrl'])) {
            $model->referenceUrl = $map['referenceUrl'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['textStyle'])) {
            $model->textStyle = $map['textStyle'];
        }

        if (isset($map['viewer'])) {
            $model->viewer = $map['viewer'];
        }

        return $model;
    }
}
