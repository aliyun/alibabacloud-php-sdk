<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesFilter extends Model
{
    /**
     * @var BizSourceFilter
     */
    public $bizSource;

    /**
     * @var DatasourceTypeFilter
     */
    public $datasourceType;

    /**
     * @var DisplayNameFilter
     */
    public $displayName;

    /**
     * @var EnabledFilter
     */
    public $enabled;

    /**
     * @var LabelsFilter
     */
    public $labels;

    /**
     * @var NotificationChannelsFilter
     */
    public $notificationChannels;

    /**
     * @var NotifyStrategyIdFilter
     */
    public $notifyStrategyId;

    /**
     * @var ObserveResourceConfigFilter
     */
    public $observeResourceConfig;

    /**
     * @var ObserveResourceGlobalScopeFilter
     */
    public $observeResourceGlobalScope;

    /**
     * @var string
     */
    public $observeResourceInstanceId;

    /**
     * @var ObserveResourceListFilter
     */
    public $observeResourceList;

    /**
     * @var ObserveResourceTypeFilter
     */
    public $observeResourceType;

    /**
     * @var PartitionKeyFilter
     */
    public $partitionKey;

    /**
     * @var SeverityLevelsFilter
     */
    public $severityLevels;

    /**
     * @var StatusFilter
     */
    public $status;

    /**
     * @var UuidFilter
     */
    public $uuid;
    protected $_name = [
        'bizSource' => 'bizSource',
        'datasourceType' => 'datasourceType',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'labels' => 'labels',
        'notificationChannels' => 'notificationChannels',
        'notifyStrategyId' => 'notifyStrategyId',
        'observeResourceConfig' => 'observeResourceConfig',
        'observeResourceGlobalScope' => 'observeResourceGlobalScope',
        'observeResourceInstanceId' => 'observeResourceInstanceId',
        'observeResourceList' => 'observeResourceList',
        'observeResourceType' => 'observeResourceType',
        'partitionKey' => 'partitionKey',
        'severityLevels' => 'severityLevels',
        'status' => 'status',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        if (null !== $this->bizSource) {
            $this->bizSource->validate();
        }
        if (null !== $this->datasourceType) {
            $this->datasourceType->validate();
        }
        if (null !== $this->displayName) {
            $this->displayName->validate();
        }
        if (null !== $this->enabled) {
            $this->enabled->validate();
        }
        if (null !== $this->labels) {
            $this->labels->validate();
        }
        if (null !== $this->notificationChannels) {
            $this->notificationChannels->validate();
        }
        if (null !== $this->notifyStrategyId) {
            $this->notifyStrategyId->validate();
        }
        if (null !== $this->observeResourceConfig) {
            $this->observeResourceConfig->validate();
        }
        if (null !== $this->observeResourceGlobalScope) {
            $this->observeResourceGlobalScope->validate();
        }
        if (null !== $this->observeResourceList) {
            $this->observeResourceList->validate();
        }
        if (null !== $this->observeResourceType) {
            $this->observeResourceType->validate();
        }
        if (null !== $this->partitionKey) {
            $this->partitionKey->validate();
        }
        if (null !== $this->severityLevels) {
            $this->severityLevels->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->uuid) {
            $this->uuid->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizSource) {
            $res['bizSource'] = null !== $this->bizSource ? $this->bizSource->toArray($noStream) : $this->bizSource;
        }

        if (null !== $this->datasourceType) {
            $res['datasourceType'] = null !== $this->datasourceType ? $this->datasourceType->toArray($noStream) : $this->datasourceType;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = null !== $this->displayName ? $this->displayName->toArray($noStream) : $this->displayName;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = null !== $this->enabled ? $this->enabled->toArray($noStream) : $this->enabled;
        }

        if (null !== $this->labels) {
            $res['labels'] = null !== $this->labels ? $this->labels->toArray($noStream) : $this->labels;
        }

        if (null !== $this->notificationChannels) {
            $res['notificationChannels'] = null !== $this->notificationChannels ? $this->notificationChannels->toArray($noStream) : $this->notificationChannels;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = null !== $this->notifyStrategyId ? $this->notifyStrategyId->toArray($noStream) : $this->notifyStrategyId;
        }

        if (null !== $this->observeResourceConfig) {
            $res['observeResourceConfig'] = null !== $this->observeResourceConfig ? $this->observeResourceConfig->toArray($noStream) : $this->observeResourceConfig;
        }

        if (null !== $this->observeResourceGlobalScope) {
            $res['observeResourceGlobalScope'] = null !== $this->observeResourceGlobalScope ? $this->observeResourceGlobalScope->toArray($noStream) : $this->observeResourceGlobalScope;
        }

        if (null !== $this->observeResourceInstanceId) {
            $res['observeResourceInstanceId'] = $this->observeResourceInstanceId;
        }

        if (null !== $this->observeResourceList) {
            $res['observeResourceList'] = null !== $this->observeResourceList ? $this->observeResourceList->toArray($noStream) : $this->observeResourceList;
        }

        if (null !== $this->observeResourceType) {
            $res['observeResourceType'] = null !== $this->observeResourceType ? $this->observeResourceType->toArray($noStream) : $this->observeResourceType;
        }

        if (null !== $this->partitionKey) {
            $res['partitionKey'] = null !== $this->partitionKey ? $this->partitionKey->toArray($noStream) : $this->partitionKey;
        }

        if (null !== $this->severityLevels) {
            $res['severityLevels'] = null !== $this->severityLevels ? $this->severityLevels->toArray($noStream) : $this->severityLevels;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = null !== $this->uuid ? $this->uuid->toArray($noStream) : $this->uuid;
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
        if (isset($map['bizSource'])) {
            $model->bizSource = BizSourceFilter::fromMap($map['bizSource']);
        }

        if (isset($map['datasourceType'])) {
            $model->datasourceType = DatasourceTypeFilter::fromMap($map['datasourceType']);
        }

        if (isset($map['displayName'])) {
            $model->displayName = DisplayNameFilter::fromMap($map['displayName']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = EnabledFilter::fromMap($map['enabled']);
        }

        if (isset($map['labels'])) {
            $model->labels = LabelsFilter::fromMap($map['labels']);
        }

        if (isset($map['notificationChannels'])) {
            $model->notificationChannels = NotificationChannelsFilter::fromMap($map['notificationChannels']);
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = NotifyStrategyIdFilter::fromMap($map['notifyStrategyId']);
        }

        if (isset($map['observeResourceConfig'])) {
            $model->observeResourceConfig = ObserveResourceConfigFilter::fromMap($map['observeResourceConfig']);
        }

        if (isset($map['observeResourceGlobalScope'])) {
            $model->observeResourceGlobalScope = ObserveResourceGlobalScopeFilter::fromMap($map['observeResourceGlobalScope']);
        }

        if (isset($map['observeResourceInstanceId'])) {
            $model->observeResourceInstanceId = $map['observeResourceInstanceId'];
        }

        if (isset($map['observeResourceList'])) {
            $model->observeResourceList = ObserveResourceListFilter::fromMap($map['observeResourceList']);
        }

        if (isset($map['observeResourceType'])) {
            $model->observeResourceType = ObserveResourceTypeFilter::fromMap($map['observeResourceType']);
        }

        if (isset($map['partitionKey'])) {
            $model->partitionKey = PartitionKeyFilter::fromMap($map['partitionKey']);
        }

        if (isset($map['severityLevels'])) {
            $model->severityLevels = SeverityLevelsFilter::fromMap($map['severityLevels']);
        }

        if (isset($map['status'])) {
            $model->status = StatusFilter::fromMap($map['status']);
        }

        if (isset($map['uuid'])) {
            $model->uuid = UuidFilter::fromMap($map['uuid']);
        }

        return $model;
    }
}
