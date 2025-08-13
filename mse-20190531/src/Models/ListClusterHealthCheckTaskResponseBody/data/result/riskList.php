<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class riskList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $module;

    /**
     * @var bool
     */
    public $mute;

    /**
     * @var bool
     */
    public $noticeFeature;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $riskCode;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $riskNameEn;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $situation;

    /**
     * @var string
     */
    public $situationEn;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $suggestionEn;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'description' => 'Description',
        'descriptionEn' => 'DescriptionEn',
        'id' => 'Id',
        'module' => 'Module',
        'mute' => 'Mute',
        'noticeFeature' => 'NoticeFeature',
        'primaryUser' => 'PrimaryUser',
        'riskCode' => 'RiskCode',
        'riskLevel' => 'RiskLevel',
        'riskName' => 'RiskName',
        'riskNameEn' => 'RiskNameEn',
        'riskType' => 'RiskType',
        'situation' => 'Situation',
        'situationEn' => 'SituationEn',
        'suggestion' => 'Suggestion',
        'suggestionEn' => 'SuggestionEn',
        'taskId' => 'TaskId',
        'type' => 'Type',
        'values' => 'Values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionEn) {
            $res['DescriptionEn'] = $this->descriptionEn;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }

        if (null !== $this->noticeFeature) {
            $res['NoticeFeature'] = $this->noticeFeature;
        }

        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }

        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        if (null !== $this->riskNameEn) {
            $res['RiskNameEn'] = $this->riskNameEn;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->situation) {
            $res['Situation'] = $this->situation;
        }

        if (null !== $this->situationEn) {
            $res['SituationEn'] = $this->situationEn;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->suggestionEn) {
            $res['SuggestionEn'] = $this->suggestionEn;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->values) {
            $res['Values'] = $this->values;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionEn'])) {
            $model->descriptionEn = $map['DescriptionEn'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }

        if (isset($map['NoticeFeature'])) {
            $model->noticeFeature = $map['NoticeFeature'];
        }

        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }

        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        if (isset($map['RiskNameEn'])) {
            $model->riskNameEn = $map['RiskNameEn'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['Situation'])) {
            $model->situation = $map['Situation'];
        }

        if (isset($map['SituationEn'])) {
            $model->situationEn = $map['SituationEn'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['SuggestionEn'])) {
            $model->suggestionEn = $map['SuggestionEn'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
