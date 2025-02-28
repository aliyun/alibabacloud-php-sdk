<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBNodeRequest\DBNode;

class ModifyDBNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBInstanceStorage;
    /**
     * @var string
     */
    public $DBInstanceStorageType;
    /**
     * @var DBNode[]
     */
    public $DBNode;
    /**
     * @var bool
     */
    public $dryRun;
    /**
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
        'DBNode'                => 'DBNode',
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
        if (\is_array($this->DBNode)) {
            Model::validateArray($this->DBNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->DBNode) {
            if (\is_array($this->DBNode)) {
                $res['DBNode'] = [];
                $n1            = 0;
                foreach ($this->DBNode as $item1) {
                    $res['DBNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n1            = 0;
                foreach ($map['DBNode'] as $item1) {
                    $model->DBNode[$n1++] = DBNode::fromMap($item1);
                }
            }
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
