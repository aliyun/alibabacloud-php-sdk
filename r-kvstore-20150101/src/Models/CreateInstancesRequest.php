<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateInstancesRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true** (default).
     *   **false**. If automatic payment is disabled, you must perform the following steps to complete the payment in the ApsaraDB for Redis console: In the top navigation bar, choose **Expenses** > **Renewal Management**. In the left-side navigation pane, click **Orders**. On the **Orders** page, find the order and complete the payment.
     *
     * >  This parameter is valid only if the value of the **ChargeType** field in the **Instances** parameter is set to **PrePaid**.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. Default value: false. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  This parameter is available only if **ChargeType** in the **Instances** parameter is set to **PrePaid**.
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The additional business information about the instance.
     *
     * @example 000000000
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The database engine version of the instance. Valid values: **4.0** and **5.0**.
     *
     * >  The default value is **5.0**.
     *
     * Valid values:
     *
     *   2.8
     *   4.0
     *   5.0
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The JSON-formatted configurations of the instance. For more information, see the "Description of the Instances parameter" section of this topic.
     *
     * This parameter is required.
     * @example [{	"RegionId": "cn-hangzhou",	"izNo": "cn-hangzhou-b",	"quantity": 2,	"instanceType": "Redis",	"instanceClass": "redis.master.small.default",	"EngineVersion": "5.0",	"ChargeType": "PostPaid"}]
     *
     * @var string
     */
    public $instances;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to restore the source instance from the recycle bin. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter is valid only if the **SrcDBInstanceId** field in the **Instances** parameter is specified.
     * @example false
     *
     * @var bool
     */
    public $rebuildInstance;

    /**
     * @description The ID of the resource group to which to assign the instance.
     *
     * @example rg-resourcegroupid1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token is case-sensitive. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'businessInfo'         => 'BusinessInfo',
        'couponNo'             => 'CouponNo',
        'engineVersion'        => 'EngineVersion',
        'instances'            => 'Instances',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rebuildInstance'      => 'RebuildInstance',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'token'                => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rebuildInstance) {
            $res['RebuildInstance'] = $this->rebuildInstance;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RebuildInstance'])) {
            $model->rebuildInstance = $map['RebuildInstance'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
