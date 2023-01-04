<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateHubClusterFeatureShrinkRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-xxx
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description Specifies whether to enable audit logs. Valid values: - true: enable audit logs. - false: disables audit logs.
     *
     * @example true
     *
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @description The ID of the master instance.
     *
     * @example c46979b1075f04d99b5f2b710393e5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable deletion protection for the master instance. After you enable deletion protection, you cannot delete the master instance in the console or by calling API operations. Valid values:
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Whether to enable ArgoCD.
     *
     * - false Disabled
     * @example false
     *
     * @var bool
     */
    public $enableArgoCD;

    /**
     * @description Specifies whether to enable Service Mesh (ASM). Valid values: true: enables ASM. false: disables ASM.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMesh;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the master instance. The name must be 1 to 63 characters in length, and can contain letters and digits. The name must start with a letter. The name can contain letters, digits, underscores (_), and hyphens (-).
     *
     * @example ack-demo
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priceLimit;

    /**
     * @description Specifies whether to associate an elastic IP address (EIP) with the API server. Default value: false. To associate an EIP with the API server, set the value to true. You can use a custom EIP by setting the ApiServerEipId parameter. If you do not set the ApiServerEipId parameter, the system automatically creates an EIP.
     *
     * @example true
     *
     * @var bool
     */
    public $publicApiServerEnabled;

    /**
     * @var string
     */
    public $scheduleMode;

    /**
     * @var bool
     */
    public $serverEnabled;

    /**
     * @var string
     */
    public $unitsShrink;
    protected $_name = [
        'apiServerEipId'         => 'ApiServerEipId',
        'auditLogEnabled'        => 'AuditLogEnabled',
        'clusterId'              => 'ClusterId',
        'deletionProtection'     => 'DeletionProtection',
        'enableArgoCD'           => 'EnableArgoCD',
        'enableMesh'             => 'EnableMesh',
        'enabled'                => 'Enabled',
        'name'                   => 'Name',
        'priceLimit'             => 'PriceLimit',
        'publicApiServerEnabled' => 'PublicApiServerEnabled',
        'scheduleMode'           => 'ScheduleMode',
        'serverEnabled'          => 'ServerEnabled',
        'unitsShrink'            => 'Units',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->auditLogEnabled) {
            $res['AuditLogEnabled'] = $this->auditLogEnabled;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->enableArgoCD) {
            $res['EnableArgoCD'] = $this->enableArgoCD;
        }
        if (null !== $this->enableMesh) {
            $res['EnableMesh'] = $this->enableMesh;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->publicApiServerEnabled) {
            $res['PublicApiServerEnabled'] = $this->publicApiServerEnabled;
        }
        if (null !== $this->scheduleMode) {
            $res['ScheduleMode'] = $this->scheduleMode;
        }
        if (null !== $this->serverEnabled) {
            $res['ServerEnabled'] = $this->serverEnabled;
        }
        if (null !== $this->unitsShrink) {
            $res['Units'] = $this->unitsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHubClusterFeatureShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
        }
        if (isset($map['AuditLogEnabled'])) {
            $model->auditLogEnabled = $map['AuditLogEnabled'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EnableArgoCD'])) {
            $model->enableArgoCD = $map['EnableArgoCD'];
        }
        if (isset($map['EnableMesh'])) {
            $model->enableMesh = $map['EnableMesh'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['PublicApiServerEnabled'])) {
            $model->publicApiServerEnabled = $map['PublicApiServerEnabled'];
        }
        if (isset($map['ScheduleMode'])) {
            $model->scheduleMode = $map['ScheduleMode'];
        }
        if (isset($map['ServerEnabled'])) {
            $model->serverEnabled = $map['ServerEnabled'];
        }
        if (isset($map['Units'])) {
            $model->unitsShrink = $map['Units'];
        }

        return $model;
    }
}
