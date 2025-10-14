<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class CreateDetectionRuleRequest extends Model
{
    /**
     * @var string
     */
    public $alertAttCk;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var string
     */
    public $alertSchemaId;

    /**
     * @var string
     */
    public $alertTacticId;

    /**
     * @var int
     */
    public $alertThresholdCount;

    /**
     * @var string
     */
    public $alertThresholdGroup;

    /**
     * @var string
     */
    public $alertThresholdPeriod;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $detectionExpressionContent;

    /**
     * @var string
     */
    public $detectionExpressionType;

    /**
     * @var string
     */
    public $detectionRuleDescription;

    /**
     * @var string
     */
    public $detectionRuleName;

    /**
     * @var string
     */
    public $detectionRuleStatus;

    /**
     * @var string
     */
    public $detectionRuleType;

    /**
     * @var string
     */
    public $entityMappings;

    /**
     * @var string
     */
    public $incidentAggregationExpression;

    /**
     * @var string
     */
    public $incidentAggregationType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logCategoryId;

    /**
     * @var string
     */
    public $logSchemaId;

    /**
     * @var string
     */
    public $playbookParameters;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $scheduleBeginTime;

    /**
     * @var string
     */
    public $scheduleExpression;

    /**
     * @var int
     */
    public $scheduleMaxRetries;

    /**
     * @var int
     */
    public $scheduleMaxTimeout;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $scheduleWindow;
    protected $_name = [
        'alertAttCk' => 'AlertAttCk',
        'alertLevel' => 'AlertLevel',
        'alertSchemaId' => 'AlertSchemaId',
        'alertTacticId' => 'AlertTacticId',
        'alertThresholdCount' => 'AlertThresholdCount',
        'alertThresholdGroup' => 'AlertThresholdGroup',
        'alertThresholdPeriod' => 'AlertThresholdPeriod',
        'alertType' => 'AlertType',
        'detectionExpressionContent' => 'DetectionExpressionContent',
        'detectionExpressionType' => 'DetectionExpressionType',
        'detectionRuleDescription' => 'DetectionRuleDescription',
        'detectionRuleName' => 'DetectionRuleName',
        'detectionRuleStatus' => 'DetectionRuleStatus',
        'detectionRuleType' => 'DetectionRuleType',
        'entityMappings' => 'EntityMappings',
        'incidentAggregationExpression' => 'IncidentAggregationExpression',
        'incidentAggregationType' => 'IncidentAggregationType',
        'lang' => 'Lang',
        'logCategoryId' => 'LogCategoryId',
        'logSchemaId' => 'LogSchemaId',
        'playbookParameters' => 'PlaybookParameters',
        'playbookUuid' => 'PlaybookUuid',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'scheduleBeginTime' => 'ScheduleBeginTime',
        'scheduleExpression' => 'ScheduleExpression',
        'scheduleMaxRetries' => 'ScheduleMaxRetries',
        'scheduleMaxTimeout' => 'ScheduleMaxTimeout',
        'scheduleType' => 'ScheduleType',
        'scheduleWindow' => 'ScheduleWindow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertAttCk) {
            $res['AlertAttCk'] = $this->alertAttCk;
        }

        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->alertSchemaId) {
            $res['AlertSchemaId'] = $this->alertSchemaId;
        }

        if (null !== $this->alertTacticId) {
            $res['AlertTacticId'] = $this->alertTacticId;
        }

        if (null !== $this->alertThresholdCount) {
            $res['AlertThresholdCount'] = $this->alertThresholdCount;
        }

        if (null !== $this->alertThresholdGroup) {
            $res['AlertThresholdGroup'] = $this->alertThresholdGroup;
        }

        if (null !== $this->alertThresholdPeriod) {
            $res['AlertThresholdPeriod'] = $this->alertThresholdPeriod;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->detectionExpressionContent) {
            $res['DetectionExpressionContent'] = $this->detectionExpressionContent;
        }

        if (null !== $this->detectionExpressionType) {
            $res['DetectionExpressionType'] = $this->detectionExpressionType;
        }

        if (null !== $this->detectionRuleDescription) {
            $res['DetectionRuleDescription'] = $this->detectionRuleDescription;
        }

        if (null !== $this->detectionRuleName) {
            $res['DetectionRuleName'] = $this->detectionRuleName;
        }

        if (null !== $this->detectionRuleStatus) {
            $res['DetectionRuleStatus'] = $this->detectionRuleStatus;
        }

        if (null !== $this->detectionRuleType) {
            $res['DetectionRuleType'] = $this->detectionRuleType;
        }

        if (null !== $this->entityMappings) {
            $res['EntityMappings'] = $this->entityMappings;
        }

        if (null !== $this->incidentAggregationExpression) {
            $res['IncidentAggregationExpression'] = $this->incidentAggregationExpression;
        }

        if (null !== $this->incidentAggregationType) {
            $res['IncidentAggregationType'] = $this->incidentAggregationType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logCategoryId) {
            $res['LogCategoryId'] = $this->logCategoryId;
        }

        if (null !== $this->logSchemaId) {
            $res['LogSchemaId'] = $this->logSchemaId;
        }

        if (null !== $this->playbookParameters) {
            $res['PlaybookParameters'] = $this->playbookParameters;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->scheduleBeginTime) {
            $res['ScheduleBeginTime'] = $this->scheduleBeginTime;
        }

        if (null !== $this->scheduleExpression) {
            $res['ScheduleExpression'] = $this->scheduleExpression;
        }

        if (null !== $this->scheduleMaxRetries) {
            $res['ScheduleMaxRetries'] = $this->scheduleMaxRetries;
        }

        if (null !== $this->scheduleMaxTimeout) {
            $res['ScheduleMaxTimeout'] = $this->scheduleMaxTimeout;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->scheduleWindow) {
            $res['ScheduleWindow'] = $this->scheduleWindow;
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
        if (isset($map['AlertAttCk'])) {
            $model->alertAttCk = $map['AlertAttCk'];
        }

        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['AlertSchemaId'])) {
            $model->alertSchemaId = $map['AlertSchemaId'];
        }

        if (isset($map['AlertTacticId'])) {
            $model->alertTacticId = $map['AlertTacticId'];
        }

        if (isset($map['AlertThresholdCount'])) {
            $model->alertThresholdCount = $map['AlertThresholdCount'];
        }

        if (isset($map['AlertThresholdGroup'])) {
            $model->alertThresholdGroup = $map['AlertThresholdGroup'];
        }

        if (isset($map['AlertThresholdPeriod'])) {
            $model->alertThresholdPeriod = $map['AlertThresholdPeriod'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['DetectionExpressionContent'])) {
            $model->detectionExpressionContent = $map['DetectionExpressionContent'];
        }

        if (isset($map['DetectionExpressionType'])) {
            $model->detectionExpressionType = $map['DetectionExpressionType'];
        }

        if (isset($map['DetectionRuleDescription'])) {
            $model->detectionRuleDescription = $map['DetectionRuleDescription'];
        }

        if (isset($map['DetectionRuleName'])) {
            $model->detectionRuleName = $map['DetectionRuleName'];
        }

        if (isset($map['DetectionRuleStatus'])) {
            $model->detectionRuleStatus = $map['DetectionRuleStatus'];
        }

        if (isset($map['DetectionRuleType'])) {
            $model->detectionRuleType = $map['DetectionRuleType'];
        }

        if (isset($map['EntityMappings'])) {
            $model->entityMappings = $map['EntityMappings'];
        }

        if (isset($map['IncidentAggregationExpression'])) {
            $model->incidentAggregationExpression = $map['IncidentAggregationExpression'];
        }

        if (isset($map['IncidentAggregationType'])) {
            $model->incidentAggregationType = $map['IncidentAggregationType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogCategoryId'])) {
            $model->logCategoryId = $map['LogCategoryId'];
        }

        if (isset($map['LogSchemaId'])) {
            $model->logSchemaId = $map['LogSchemaId'];
        }

        if (isset($map['PlaybookParameters'])) {
            $model->playbookParameters = $map['PlaybookParameters'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['ScheduleBeginTime'])) {
            $model->scheduleBeginTime = $map['ScheduleBeginTime'];
        }

        if (isset($map['ScheduleExpression'])) {
            $model->scheduleExpression = $map['ScheduleExpression'];
        }

        if (isset($map['ScheduleMaxRetries'])) {
            $model->scheduleMaxRetries = $map['ScheduleMaxRetries'];
        }

        if (isset($map['ScheduleMaxTimeout'])) {
            $model->scheduleMaxTimeout = $map['ScheduleMaxTimeout'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['ScheduleWindow'])) {
            $model->scheduleWindow = $map['ScheduleWindow'];
        }

        return $model;
    }
}
