<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceEntitlementResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $allocated;

    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $configured;

    /**
     * @var bool
     */
    public $entitled;

    /**
     * @var string
     */
    public $featureType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var int
     */
    public $remaining;

    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $running;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $usagePercent;

    /**
     * @var int
     */
    public $used;
    protected $_name = [
        'allocated' => 'Allocated',
        'available' => 'Available',
        'code' => 'Code',
        'configured' => 'Configured',
        'entitled' => 'Entitled',
        'featureType' => 'FeatureType',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'pluginId' => 'PluginId',
        'quota' => 'Quota',
        'remaining' => 'Remaining',
        'resourceCode' => 'ResourceCode',
        'resourceType' => 'ResourceType',
        'running' => 'Running',
        'type' => 'Type',
        'usagePercent' => 'UsagePercent',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocated) {
            $res['Allocated'] = $this->allocated;
        }

        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }

        if (null !== $this->entitled) {
            $res['Entitled'] = $this->entitled;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->remaining) {
            $res['Remaining'] = $this->remaining;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->usagePercent) {
            $res['UsagePercent'] = $this->usagePercent;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['Allocated'])) {
            $model->allocated = $map['Allocated'];
        }

        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        if (isset($map['Entitled'])) {
            $model->entitled = $map['Entitled'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['Remaining'])) {
            $model->remaining = $map['Remaining'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UsagePercent'])) {
            $model->usagePercent = $map['UsagePercent'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
