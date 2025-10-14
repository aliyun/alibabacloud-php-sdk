<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDetectionRulesShrinkRequest extends Model
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
    public $alertTacticId;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $detectionExpressionType;

    /**
     * @var string
     */
    public $detectionRuleId;

    /**
     * @var string
     */
    public $detectionRuleIdsShrink;

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
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $orderFieldName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'alertAttCk' => 'AlertAttCk',
        'alertLevel' => 'AlertLevel',
        'alertTacticId' => 'AlertTacticId',
        'alertType' => 'AlertType',
        'detectionExpressionType' => 'DetectionExpressionType',
        'detectionRuleId' => 'DetectionRuleId',
        'detectionRuleIdsShrink' => 'DetectionRuleIds',
        'detectionRuleName' => 'DetectionRuleName',
        'detectionRuleStatus' => 'DetectionRuleStatus',
        'detectionRuleType' => 'DetectionRuleType',
        'incidentAggregationType' => 'IncidentAggregationType',
        'lang' => 'Lang',
        'logCategoryId' => 'LogCategoryId',
        'logSchemaId' => 'LogSchemaId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderDirection' => 'OrderDirection',
        'orderFieldName' => 'OrderFieldName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
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

        if (null !== $this->alertTacticId) {
            $res['AlertTacticId'] = $this->alertTacticId;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->detectionExpressionType) {
            $res['DetectionExpressionType'] = $this->detectionExpressionType;
        }

        if (null !== $this->detectionRuleId) {
            $res['DetectionRuleId'] = $this->detectionRuleId;
        }

        if (null !== $this->detectionRuleIdsShrink) {
            $res['DetectionRuleIds'] = $this->detectionRuleIdsShrink;
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

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->orderFieldName) {
            $res['OrderFieldName'] = $this->orderFieldName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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

        if (isset($map['AlertTacticId'])) {
            $model->alertTacticId = $map['AlertTacticId'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['DetectionExpressionType'])) {
            $model->detectionExpressionType = $map['DetectionExpressionType'];
        }

        if (isset($map['DetectionRuleId'])) {
            $model->detectionRuleId = $map['DetectionRuleId'];
        }

        if (isset($map['DetectionRuleIds'])) {
            $model->detectionRuleIdsShrink = $map['DetectionRuleIds'];
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

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['OrderFieldName'])) {
            $model->orderFieldName = $map['OrderFieldName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
