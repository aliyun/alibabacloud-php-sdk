<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of applications.
     *
     * @example 1
     *
     * @var int
     */
    public $appCount;

    /**
     * @description The region to which the namespace belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $belongRegion;

    /**
     * @description The description of the namespace.
     *
     * @example decs
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the jump server application.
     *
     * @example 5ec46468-6b26-4a3c-9f7c-bf88761a****
     *
     * @var string
     */
    public $jumpServerAppId;

    /**
     * @description The IP address of the jump server.
     *
     * @example 120.78.XXX.XX
     *
     * @var string
     */
    public $jumpServerIp;

    /**
     * @description The ID of the change order.
     *
     * @example afedb3c4-63f8-4a3d-aaa3-2c30363f****
     *
     * @var string
     */
    public $lastChangeOrderId;

    /**
     * @description Indicates whether a change order is being executed in the namespace. Valid values:
     *
     *   **true**: indicates that a change order is being executed in the namespace.
     *   **false**: indicates that no change orders are being executed in the namespace.
     *
     * @example true
     *
     * @var bool
     */
    public $lastChangeOrderRunning;

    /**
     * @description The status of the latest change order. Valid values:
     *
     *   **READY**: The change order is ready.
     *   **RUNNING**: The change order is being executed.
     *   **SUCCESS**: The change order was executed.
     *   **FAIL**: The change order could not be executed.
     *   **ABORT**: The change order was terminated.
     *   **WAIT_BATCH_CONFIRM**: The change order is pending execution. You must manually confirm the release batch.
     *   **AUTO_BATCH_WAIT**: The change order is pending execution. SAE will automatically confirm the release batch.
     *   **SYSTEM_FAIL**: A system exception occurred.
     *   **WAIT_APPROVAL**: The change order is pending approval.
     *   **APPROVED**: The change order is approved and is pending execution.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $lastChangeOrderStatus;

    /**
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-shangha:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description Indicates whether the notification of a change order is expired. Valid values:
     *
     *   **true**: indicates that the notification is expired.
     *   **false**: indicates that the notification is not expired.
     *
     * @example true
     *
     * @var bool
     */
    public $notificationExpired;

    /**
     * @description The ID of the security group.
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the tenant in the SAE namespace.
     *
     * @example 838cad95-973f-48fe-830b-2a8546d7****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the user.
     *
     * @example test@aliyun.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2ze559r1z1bpwqxwp****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example test
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example test
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'appCount'               => 'AppCount',
        'belongRegion'           => 'BelongRegion',
        'description'            => 'Description',
        'jumpServerAppId'        => 'JumpServerAppId',
        'jumpServerIp'           => 'JumpServerIp',
        'lastChangeOrderId'      => 'LastChangeOrderId',
        'lastChangeOrderRunning' => 'LastChangeOrderRunning',
        'lastChangeOrderStatus'  => 'LastChangeOrderStatus',
        'nameSpaceShortId'       => 'NameSpaceShortId',
        'namespaceId'            => 'NamespaceId',
        'namespaceName'          => 'NamespaceName',
        'notificationExpired'    => 'NotificationExpired',
        'securityGroupId'        => 'SecurityGroupId',
        'tenantId'               => 'TenantId',
        'userId'                 => 'UserId',
        'vSwitchId'              => 'VSwitchId',
        'vSwitchName'            => 'VSwitchName',
        'vpcId'                  => 'VpcId',
        'vpcName'                => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->belongRegion) {
            $res['BelongRegion'] = $this->belongRegion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jumpServerAppId) {
            $res['JumpServerAppId'] = $this->jumpServerAppId;
        }
        if (null !== $this->jumpServerIp) {
            $res['JumpServerIp'] = $this->jumpServerIp;
        }
        if (null !== $this->lastChangeOrderId) {
            $res['LastChangeOrderId'] = $this->lastChangeOrderId;
        }
        if (null !== $this->lastChangeOrderRunning) {
            $res['LastChangeOrderRunning'] = $this->lastChangeOrderRunning;
        }
        if (null !== $this->lastChangeOrderStatus) {
            $res['LastChangeOrderStatus'] = $this->lastChangeOrderStatus;
        }
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->notificationExpired) {
            $res['NotificationExpired'] = $this->notificationExpired;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['BelongRegion'])) {
            $model->belongRegion = $map['BelongRegion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JumpServerAppId'])) {
            $model->jumpServerAppId = $map['JumpServerAppId'];
        }
        if (isset($map['JumpServerIp'])) {
            $model->jumpServerIp = $map['JumpServerIp'];
        }
        if (isset($map['LastChangeOrderId'])) {
            $model->lastChangeOrderId = $map['LastChangeOrderId'];
        }
        if (isset($map['LastChangeOrderRunning'])) {
            $model->lastChangeOrderRunning = $map['LastChangeOrderRunning'];
        }
        if (isset($map['LastChangeOrderStatus'])) {
            $model->lastChangeOrderStatus = $map['LastChangeOrderStatus'];
        }
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NotificationExpired'])) {
            $model->notificationExpired = $map['NotificationExpired'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
