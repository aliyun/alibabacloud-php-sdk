<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

class CreateSynchronizationJobRequest extends Model
{
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** parameter can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description If you set the **SourceEndpoint.InstanceType** parameter to **DRDS**, you must specify the DBInstanceCount parameter. This parameter specifies the number of private RDS instances attached to the source PolarDB-X instance. Default value: **1**.
     *
     * @example 3
     *
     * @var int
     */
    public $DBInstanceCount;

    /**
     * @description The ID of the region where the destination database resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >  If the **SourceRegion** parameter is set to the China (Hong Kong) region or a region outside the Chinese mainland, you must set the DestRegion parameter to the same region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The billing method of the data synchronization instance.
     *
     *   **PrePaid**: subscription
     *   **PostPaid** (default value): pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The billing cycle of the subscription instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * >  You must specify this parameter only if you set the PayType parameter to **PrePaid**.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the region where the source database resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The specification of the data synchronization instance. Valid values: **micro**, **small**, **medium**, and **large**.
     *
     * >  For more information about the test performance of each specification, see [Specifications of data synchronization instances](~~26605~~).
     * @example small
     *
     * @var string
     */
    public $synchronizationJobClass;

    /**
     * @description The synchronization topology. Valid values:
     *
     *   **oneway**: one-way synchronization
     *   **bidirectional**: two-way synchronization
     *
     * >
     *   The default value is **oneway**.
     *   This parameter can be set to **bidirectional** only when the **SourceEndpoint.InstanceType** and **DestinationEndpoint.InstanceType** parameters are set to **MySQL**, **PolarDB**, or **Redis**.
     *
     * @example oneway
     *
     * @var string
     */
    public $topology;

    /**
     * @description The subscription length.
     *
     *   If the billing cycle is **Year**, the value range is **1 to 5**.
     *   If the billing cycle is **Month**, the value range is **1 to 60**.
     *
     * >  You must specify this parameter only if you set the PayType parameter to **PrePaid**.
     * @example 1
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The network type. Valid value: **Intranet**, which indicates virtual private cloud (VPC).
     *
     * @example Intranet
     *
     * @var string
     */
    public $networkType;
    protected $_name = [
        'destinationEndpoint'     => 'DestinationEndpoint',
        'sourceEndpoint'          => 'SourceEndpoint',
        'accountId'               => 'AccountId',
        'clientToken'             => 'ClientToken',
        'DBInstanceCount'         => 'DBInstanceCount',
        'destRegion'              => 'DestRegion',
        'ownerId'                 => 'OwnerId',
        'payType'                 => 'PayType',
        'period'                  => 'Period',
        'regionId'                => 'RegionId',
        'sourceRegion'            => 'SourceRegion',
        'synchronizationJobClass' => 'SynchronizationJobClass',
        'topology'                => 'Topology',
        'usedTime'                => 'UsedTime',
        'networkType'             => 'networkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceCount) {
            $res['DBInstanceCount'] = $this->DBInstanceCount;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->synchronizationJobClass) {
            $res['SynchronizationJobClass'] = $this->synchronizationJobClass;
        }
        if (null !== $this->topology) {
            $res['Topology'] = $this->topology;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSynchronizationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceCount'])) {
            $model->DBInstanceCount = $map['DBInstanceCount'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SynchronizationJobClass'])) {
            $model->synchronizationJobClass = $map['SynchronizationJobClass'];
        }
        if (isset($map['Topology'])) {
            $model->topology = $map['Topology'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        return $model;
    }
}
