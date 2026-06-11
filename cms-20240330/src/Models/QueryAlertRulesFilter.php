<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesFilter extends Model
{
    /**
     * @var string
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
     * @var string
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
        'datasourceType' => 'datasourceType',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'labels' => 'labels',
        'observeResourceGlobalScope' => 'observeResourceGlobalScope',
        'observeResourceInstanceId' => 'observeResourceInstanceId',
        'observeResourceType' => 'observeResourceType',
        'severityLevels' => 'severityLevels',
        'status' => 'status',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        if (null !== $this->displayName) {
            $this->displayName->validate();
        }
        if (null !== $this->enabled) {
            $this->enabled->validate();
        }
        if (null !== $this->labels) {
            $this->labels->validate();
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
        if (null !== $this->datasourceType) {
            $res['datasourceType'] = $this->datasourceType;
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

        if (null !== $this->observeResourceGlobalScope) {
            $res['observeResourceGlobalScope'] = $this->observeResourceGlobalScope;
        }

        if (null !== $this->observeResourceInstanceId) {
            $res['observeResourceInstanceId'] = $this->observeResourceInstanceId;
        }

        if (null !== $this->observeResourceType) {
            $res['observeResourceType'] = $this->observeResourceType;
        }

        if (null !== $this->severityLevels) {
            $res['severityLevels'] = $this->severityLevels;
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
        if (isset($map['datasourceType'])) {
            $model->datasourceType = $map['datasourceType'];
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

        if (isset($map['observeResourceGlobalScope'])) {
            $model->observeResourceGlobalScope = $map['observeResourceGlobalScope'];
        }

        if (isset($map['observeResourceInstanceId'])) {
            $model->observeResourceInstanceId = $map['observeResourceInstanceId'];
        }

        if (isset($map['observeResourceType'])) {
            $model->observeResourceType = $map['observeResourceType'];
        }

        if (isset($map['severityLevels'])) {
            $model->severityLevels = $map['severityLevels'];
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
