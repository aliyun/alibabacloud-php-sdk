<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules\entityMappings;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules\playbook;

class detectionRules extends Model
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
     * @var int
     */
    public $createTime;

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
    public $detectionRuleId;

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
     * @var entityMappings[]
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
    public $logCategoryId;

    /**
     * @var string
     */
    public $logSchemaId;

    /**
     * @var playbook
     */
    public $playbook;

    /**
     * @var string
     */
    public $playbookParameters;

    /**
     * @var string
     */
    public $playbookUuid;

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

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'alertAttCk' => 'AlertAttCk',
        'alertLevel' => 'AlertLevel',
        'alertSchemaId' => 'AlertSchemaId',
        'alertTacticId' => 'AlertTacticId',
        'alertThresholdCount' => 'AlertThresholdCount',
        'alertThresholdGroup' => 'AlertThresholdGroup',
        'alertThresholdPeriod' => 'AlertThresholdPeriod',
        'alertType' => 'AlertType',
        'createTime' => 'CreateTime',
        'detectionExpressionContent' => 'DetectionExpressionContent',
        'detectionExpressionType' => 'DetectionExpressionType',
        'detectionRuleDescription' => 'DetectionRuleDescription',
        'detectionRuleId' => 'DetectionRuleId',
        'detectionRuleName' => 'DetectionRuleName',
        'detectionRuleStatus' => 'DetectionRuleStatus',
        'detectionRuleType' => 'DetectionRuleType',
        'entityMappings' => 'EntityMappings',
        'incidentAggregationExpression' => 'IncidentAggregationExpression',
        'incidentAggregationType' => 'IncidentAggregationType',
        'logCategoryId' => 'LogCategoryId',
        'logSchemaId' => 'LogSchemaId',
        'playbook' => 'Playbook',
        'playbookParameters' => 'PlaybookParameters',
        'playbookUuid' => 'PlaybookUuid',
        'scheduleBeginTime' => 'ScheduleBeginTime',
        'scheduleExpression' => 'ScheduleExpression',
        'scheduleMaxRetries' => 'ScheduleMaxRetries',
        'scheduleMaxTimeout' => 'ScheduleMaxTimeout',
        'scheduleType' => 'ScheduleType',
        'scheduleWindow' => 'ScheduleWindow',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->entityMappings)) {
            Model::validateArray($this->entityMappings);
        }
        if (null !== $this->playbook) {
            $this->playbook->validate();
        }
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->detectionRuleId) {
            $res['DetectionRuleId'] = $this->detectionRuleId;
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
            if (\is_array($this->entityMappings)) {
                $res['EntityMappings'] = [];
                $n1 = 0;
                foreach ($this->entityMappings as $item1) {
                    $res['EntityMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->incidentAggregationExpression) {
            $res['IncidentAggregationExpression'] = $this->incidentAggregationExpression;
        }

        if (null !== $this->incidentAggregationType) {
            $res['IncidentAggregationType'] = $this->incidentAggregationType;
        }

        if (null !== $this->logCategoryId) {
            $res['LogCategoryId'] = $this->logCategoryId;
        }

        if (null !== $this->logSchemaId) {
            $res['LogSchemaId'] = $this->logSchemaId;
        }

        if (null !== $this->playbook) {
            $res['Playbook'] = null !== $this->playbook ? $this->playbook->toArray($noStream) : $this->playbook;
        }

        if (null !== $this->playbookParameters) {
            $res['PlaybookParameters'] = $this->playbookParameters;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['DetectionRuleId'])) {
            $model->detectionRuleId = $map['DetectionRuleId'];
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
            if (!empty($map['EntityMappings'])) {
                $model->entityMappings = [];
                $n1 = 0;
                foreach ($map['EntityMappings'] as $item1) {
                    $model->entityMappings[$n1] = entityMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IncidentAggregationExpression'])) {
            $model->incidentAggregationExpression = $map['IncidentAggregationExpression'];
        }

        if (isset($map['IncidentAggregationType'])) {
            $model->incidentAggregationType = $map['IncidentAggregationType'];
        }

        if (isset($map['LogCategoryId'])) {
            $model->logCategoryId = $map['LogCategoryId'];
        }

        if (isset($map['LogSchemaId'])) {
            $model->logSchemaId = $map['LogSchemaId'];
        }

        if (isset($map['Playbook'])) {
            $model->playbook = playbook::fromMap($map['Playbook']);
        }

        if (isset($map['PlaybookParameters'])) {
            $model->playbookParameters = $map['PlaybookParameters'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
