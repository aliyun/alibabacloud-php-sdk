<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appCount;

    /**
     * @var string
     */
    public $belongRegion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jumpServerAppId;

    /**
     * @var string
     */
    public $jumpServerIp;

    /**
     * @var string
     */
    public $lastChangeOrderId;

    /**
     * @var bool
     */
    public $lastChangeOrderRunning;

    /**
     * @var string
     */
    public $lastChangeOrderStatus;

    /**
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var bool
     */
    public $notificationExpired;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'appCount' => 'AppCount',
        'belongRegion' => 'BelongRegion',
        'description' => 'Description',
        'jumpServerAppId' => 'JumpServerAppId',
        'jumpServerIp' => 'JumpServerIp',
        'lastChangeOrderId' => 'LastChangeOrderId',
        'lastChangeOrderRunning' => 'LastChangeOrderRunning',
        'lastChangeOrderStatus' => 'LastChangeOrderStatus',
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'notificationExpired' => 'NotificationExpired',
        'securityGroupId' => 'SecurityGroupId',
        'slsConfigs' => 'SlsConfigs',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'vSwitchId' => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
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
