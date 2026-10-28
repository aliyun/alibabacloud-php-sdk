<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAlertHistoriesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertHistoryId;

    /**
     * @var string
     */
    public $alertRuleId;

    /**
     * @var string
     */
    public $bizSource;

    /**
     * @var string
     */
    public $cmsNamespace;

    /**
     * @var string
     */
    public $cmsProductCategory;

    /**
     * @var string
     */
    public $displayNameKeyWord;

    /**
     * @var string
     */
    public $instanceKey;

    /**
     * @var string
     */
    public $labelFilterShrink;

    /**
     * @var string
     */
    public $latestLevel;

    /**
     * @var string
     */
    public $maxLevel;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $notificationFilterShrink;

    /**
     * @var string
     */
    public $observeRelationType;

    /**
     * @var string
     */
    public $observeResourceDomain;

    /**
     * @var bool
     */
    public $observeResourceGlobalScope;

    /**
     * @var string
     */
    public $observeResourceInstanceId;

    /**
     * @var string
     */
    public $observeResourceType;

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
    public $partitionKey;

    /**
     * @var int
     */
    public $startTimeFrom;

    /**
     * @var int
     */
    public $startTimeTo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'alertHistoryId' => 'alertHistoryId',
        'alertRuleId' => 'alertRuleId',
        'bizSource' => 'bizSource',
        'cmsNamespace' => 'cmsNamespace',
        'cmsProductCategory' => 'cmsProductCategory',
        'displayNameKeyWord' => 'displayNameKeyWord',
        'instanceKey' => 'instanceKey',
        'labelFilterShrink' => 'labelFilter',
        'latestLevel' => 'latestLevel',
        'maxLevel' => 'maxLevel',
        'maxResults' => 'maxResults',
        'migrationStatus' => 'migrationStatus',
        'nextToken' => 'nextToken',
        'notificationFilterShrink' => 'notificationFilter',
        'observeRelationType' => 'observeRelationType',
        'observeResourceDomain' => 'observeResourceDomain',
        'observeResourceGlobalScope' => 'observeResourceGlobalScope',
        'observeResourceInstanceId' => 'observeResourceInstanceId',
        'observeResourceType' => 'observeResourceType',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'partitionKey' => 'partitionKey',
        'startTimeFrom' => 'startTimeFrom',
        'startTimeTo' => 'startTimeTo',
        'status' => 'status',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertHistoryId) {
            $res['alertHistoryId'] = $this->alertHistoryId;
        }

        if (null !== $this->alertRuleId) {
            $res['alertRuleId'] = $this->alertRuleId;
        }

        if (null !== $this->bizSource) {
            $res['bizSource'] = $this->bizSource;
        }

        if (null !== $this->cmsNamespace) {
            $res['cmsNamespace'] = $this->cmsNamespace;
        }

        if (null !== $this->cmsProductCategory) {
            $res['cmsProductCategory'] = $this->cmsProductCategory;
        }

        if (null !== $this->displayNameKeyWord) {
            $res['displayNameKeyWord'] = $this->displayNameKeyWord;
        }

        if (null !== $this->instanceKey) {
            $res['instanceKey'] = $this->instanceKey;
        }

        if (null !== $this->labelFilterShrink) {
            $res['labelFilter'] = $this->labelFilterShrink;
        }

        if (null !== $this->latestLevel) {
            $res['latestLevel'] = $this->latestLevel;
        }

        if (null !== $this->maxLevel) {
            $res['maxLevel'] = $this->maxLevel;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->notificationFilterShrink) {
            $res['notificationFilter'] = $this->notificationFilterShrink;
        }

        if (null !== $this->observeRelationType) {
            $res['observeRelationType'] = $this->observeRelationType;
        }

        if (null !== $this->observeResourceDomain) {
            $res['observeResourceDomain'] = $this->observeResourceDomain;
        }

        if (null !== $this->observeResourceGlobalScope) {
            $res['observeResourceGlobalScope'] = $this->observeResourceGlobalScope;
        }

        if (null !== $this->observeResourceInstanceId) {
            $res['observeResourceInstanceId'] = $this->observeResourceInstanceId;
        }

        if (null !== $this->observeResourceType) {
            $res['observeResourceType'] = $this->observeResourceType;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->partitionKey) {
            $res['partitionKey'] = $this->partitionKey;
        }

        if (null !== $this->startTimeFrom) {
            $res['startTimeFrom'] = $this->startTimeFrom;
        }

        if (null !== $this->startTimeTo) {
            $res['startTimeTo'] = $this->startTimeTo;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['alertHistoryId'])) {
            $model->alertHistoryId = $map['alertHistoryId'];
        }

        if (isset($map['alertRuleId'])) {
            $model->alertRuleId = $map['alertRuleId'];
        }

        if (isset($map['bizSource'])) {
            $model->bizSource = $map['bizSource'];
        }

        if (isset($map['cmsNamespace'])) {
            $model->cmsNamespace = $map['cmsNamespace'];
        }

        if (isset($map['cmsProductCategory'])) {
            $model->cmsProductCategory = $map['cmsProductCategory'];
        }

        if (isset($map['displayNameKeyWord'])) {
            $model->displayNameKeyWord = $map['displayNameKeyWord'];
        }

        if (isset($map['instanceKey'])) {
            $model->instanceKey = $map['instanceKey'];
        }

        if (isset($map['labelFilter'])) {
            $model->labelFilterShrink = $map['labelFilter'];
        }

        if (isset($map['latestLevel'])) {
            $model->latestLevel = $map['latestLevel'];
        }

        if (isset($map['maxLevel'])) {
            $model->maxLevel = $map['maxLevel'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['notificationFilter'])) {
            $model->notificationFilterShrink = $map['notificationFilter'];
        }

        if (isset($map['observeRelationType'])) {
            $model->observeRelationType = $map['observeRelationType'];
        }

        if (isset($map['observeResourceDomain'])) {
            $model->observeResourceDomain = $map['observeResourceDomain'];
        }

        if (isset($map['observeResourceGlobalScope'])) {
            $model->observeResourceGlobalScope = $map['observeResourceGlobalScope'];
        }

        if (isset($map['observeResourceInstanceId'])) {
            $model->observeResourceInstanceId = $map['observeResourceInstanceId'];
        }

        if (isset($map['observeResourceType'])) {
            $model->observeResourceType = $map['observeResourceType'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['partitionKey'])) {
            $model->partitionKey = $map['partitionKey'];
        }

        if (isset($map['startTimeFrom'])) {
            $model->startTimeFrom = $map['startTimeFrom'];
        }

        if (isset($map['startTimeTo'])) {
            $model->startTimeTo = $map['startTimeTo'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
