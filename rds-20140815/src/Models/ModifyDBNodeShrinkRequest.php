<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBNodeShrinkRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     * 1.  **true**: automatically completes the payment. Make sure that your account balance is sufficient.
     * 2.  **false**: does not automatically complete the payment. An unpaid order is generated.
     *
     * >  The default value is true. If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to pay for the order.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-bp1k8s41l2o52****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new storage capacity of the instance. Unit: GB For more information, see [Instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * @example 20
     *
     * @var string
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd**: performance level 1 (PL1) enhanced SSD (ESSD)
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The information about the node.
     *
     * >  This parameter is supported for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     * @var string
     */
    public $DBNodeShrink;

    /**
     * @description Specifies whether to perform a dry run. Valid values: Valid values:
     *
     *   **true**: performs a dry run and does not perform the actual request. The system checks items such as the request parameters, request format, service limits, and available resources.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Effective time, value:
     * - MaintainTime: Effective within the operational time period, please refer to ModifyDBInstanceMaintainTime.
     * @example Immediate
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to asynchronously perform the operation. Valid values:
     *
     *   **true** (default): sends only the order. The operation is asynchronously performed.
     *   **false**: sends the request. After the request passes the check, the operation is directly performed.
     *
     * >  The default value is true, which indicates that the change operation is asynchronously performed. If you set this parameter to false, the change operation is simultaneously performed. This prolongs the response time of the operation.
     * @example true
     *
     * @var bool
     */
    public $produceAsync;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoPay'               => 'AutoPay',
        'clientToken'           => 'ClientToken',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBNodeShrink'          => 'DBNode',
        'dryRun'                => 'DryRun',
        'effectiveTime'         => 'EffectiveTime',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'produceAsync'          => 'ProduceAsync',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBNodeShrink) {
            $res['DBNode'] = $this->DBNodeShrink;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->produceAsync) {
            $res['ProduceAsync'] = $this->produceAsync;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBNodeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBNode'])) {
            $model->DBNodeShrink = $map['DBNode'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProduceAsync'])) {
            $model->produceAsync = $map['ProduceAsync'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
