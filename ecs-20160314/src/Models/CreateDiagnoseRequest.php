<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnoseRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDiagnoseRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $diagnoseAction;

    /**
     * @var string
     */
    public $diagnoseErrorCode;

    /**
     * @var string
     */
    public $diagnoseProduct;

    /**
     * @var string
     */
    public $diagnoseRequestId;

    /**
     * @var string
     */
    public $diagnoseRequestParams;

    /**
     * @var string
     */
    public $diagnoseResponse;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceTypeName;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'amount'                => 'Amount',
        'diagnoseAction'        => 'DiagnoseAction',
        'diagnoseErrorCode'     => 'DiagnoseErrorCode',
        'diagnoseProduct'       => 'DiagnoseProduct',
        'diagnoseRequestId'     => 'DiagnoseRequestId',
        'diagnoseRequestParams' => 'DiagnoseRequestParams',
        'diagnoseResponse'      => 'DiagnoseResponse',
        'diskCategory'          => 'DiskCategory',
        'expireTime'            => 'ExpireTime',
        'instanceChargeType'    => 'InstanceChargeType',
        'instanceTypeName'      => 'InstanceTypeName',
        'izNo'                  => 'IzNo',
        'mark'                  => 'Mark',
        'networkType'           => 'NetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'period'                => 'Period',
        'periodUnit'            => 'PeriodUnit',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'tag'                   => 'Tag',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->diagnoseAction) {
            $res['DiagnoseAction'] = $this->diagnoseAction;
        }
        if (null !== $this->diagnoseErrorCode) {
            $res['DiagnoseErrorCode'] = $this->diagnoseErrorCode;
        }
        if (null !== $this->diagnoseProduct) {
            $res['DiagnoseProduct'] = $this->diagnoseProduct;
        }
        if (null !== $this->diagnoseRequestId) {
            $res['DiagnoseRequestId'] = $this->diagnoseRequestId;
        }
        if (null !== $this->diagnoseRequestParams) {
            $res['DiagnoseRequestParams'] = $this->diagnoseRequestParams;
        }
        if (null !== $this->diagnoseResponse) {
            $res['DiagnoseResponse'] = $this->diagnoseResponse;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnoseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['DiagnoseAction'])) {
            $model->diagnoseAction = $map['DiagnoseAction'];
        }
        if (isset($map['DiagnoseErrorCode'])) {
            $model->diagnoseErrorCode = $map['DiagnoseErrorCode'];
        }
        if (isset($map['DiagnoseProduct'])) {
            $model->diagnoseProduct = $map['DiagnoseProduct'];
        }
        if (isset($map['DiagnoseRequestId'])) {
            $model->diagnoseRequestId = $map['DiagnoseRequestId'];
        }
        if (isset($map['DiagnoseRequestParams'])) {
            $model->diagnoseRequestParams = $map['DiagnoseRequestParams'];
        }
        if (isset($map['DiagnoseResponse'])) {
            $model->diagnoseResponse = $map['DiagnoseResponse'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
