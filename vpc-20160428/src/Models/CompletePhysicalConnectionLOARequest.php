<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CompletePhysicalConnectionLOARequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among different requests.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** of each API request may be different.
     * @example 02fb3da4-230e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether the construction is completed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $finishWork;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp10tvlhnwkw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The circuit code provided by the connectivity provider.
     *
     * @example aaa111****
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description The label of the cable in the data center.
     *
     * @example bbb222****
     *
     * @var string
     */
    public $lineLabel;

    /**
     * @description The contact information about line O\&M.
     *
     * @example 1388888****
     *
     * @var string
     */
    public $lineSPContactInfo;

    /**
     * @description The ISP. Valid values:
     *
     *   **China Telecom**
     *   **China Unicom**
     *   **China Mobile**
     *   **Other ISPs in China**
     *
     * @example Other ISPs in China
     *
     * @var string
     */
    public $lineServiceProvider;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-shanghai
     *
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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'finishWork'           => 'FinishWork',
        'instanceId'           => 'InstanceId',
        'lineCode'             => 'LineCode',
        'lineLabel'            => 'LineLabel',
        'lineSPContactInfo'    => 'LineSPContactInfo',
        'lineServiceProvider'  => 'LineServiceProvider',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->finishWork) {
            $res['FinishWork'] = $this->finishWork;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }
        if (null !== $this->lineSPContactInfo) {
            $res['LineSPContactInfo'] = $this->lineSPContactInfo;
        }
        if (null !== $this->lineServiceProvider) {
            $res['LineServiceProvider'] = $this->lineServiceProvider;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompletePhysicalConnectionLOARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FinishWork'])) {
            $model->finishWork = $map['FinishWork'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }
        if (isset($map['LineSPContactInfo'])) {
            $model->lineSPContactInfo = $map['LineSPContactInfo'];
        }
        if (isset($map['LineServiceProvider'])) {
            $model->lineServiceProvider = $map['LineServiceProvider'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
