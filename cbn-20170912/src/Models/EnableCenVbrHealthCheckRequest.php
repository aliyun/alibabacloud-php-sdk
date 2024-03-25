<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class EnableCenVbrHealthCheckRequest extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-hahhfskfkseig****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The description of the health check.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example testdesc
     *
     * @var string
     */
    public $description;

    /**
     * @description The time interval at which probe packets are sent during a health check. Unit: seconds. Default value: **2**. Valid values: **2 to 3**.
     *
     * @example 2
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description Specifies whether to enable probing during the health check. Valid values:
     *
     *   **true**: yes
     *
     * Make sure that a redundant route is available. Otherwise, network disconnections may occur.
     *
     *   **false** (default): no
     *
     * Probing is disabled by default. If a redundant route is specified, the system switches to the redundant route if the detected route is not reachable.
     * @example false
     *
     * @var bool
     */
    public $healthCheckOnly;

    /**
     * @description The source IP address for the health check. You can set the source IP address in the following ways:
     *
     *   **Automatic IP Address** (recommended): The system automatically assigns an IP address from the 100.96.0.0/16 CIDR block.
     *   **Custom IP Address**: You must specify an idle IP address from the 10.0.0.0/8, 192.168.0.0/16, or 172.16.0.0/12 CIDR block. The specified IP address cannot be the IP address of the VBR on the Alibaba Cloud side, the IP address of the VBR on the customer side, or other IP addresses with which the VBR communicates through the CEN instance.
     *
     * @example 192.XX.XX.1
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description The destination IP address for the health check.
     *
     * Set the destination IP address to the IP address of the VBR on the customer side.
     * @example 10.XX.XX.1
     *
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @description The number of probe packets that are sent during a health check. Unit: packets. Valid values: **3 to 8**. Default value: **8**.
     *
     * @example 8
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-wz95o9aylj181n5mzk****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * > This parameter is required if the VBR and the CEN instance belong to different Alibaba Cloud accounts.
     * @example 1250123456123456
     *
     * @var int
     */
    public $vbrInstanceOwnerId;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     * @example cn-shenzhen
     *
     * @var string
     */
    public $vbrInstanceRegionId;
    protected $_name = [
        'cenId'                => 'CenId',
        'description'          => 'Description',
        'healthCheckInterval'  => 'HealthCheckInterval',
        'healthCheckOnly'      => 'HealthCheckOnly',
        'healthCheckSourceIp'  => 'HealthCheckSourceIp',
        'healthCheckTargetIp'  => 'HealthCheckTargetIp',
        'healthyThreshold'     => 'HealthyThreshold',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vbrInstanceId'        => 'VbrInstanceId',
        'vbrInstanceOwnerId'   => 'VbrInstanceOwnerId',
        'vbrInstanceRegionId'  => 'VbrInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckOnly) {
            $res['HealthCheckOnly'] = $this->healthCheckOnly;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrInstanceOwnerId) {
            $res['VbrInstanceOwnerId'] = $this->vbrInstanceOwnerId;
        }
        if (null !== $this->vbrInstanceRegionId) {
            $res['VbrInstanceRegionId'] = $this->vbrInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableCenVbrHealthCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckOnly'])) {
            $model->healthCheckOnly = $map['HealthCheckOnly'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrInstanceOwnerId'])) {
            $model->vbrInstanceOwnerId = $map['VbrInstanceOwnerId'];
        }
        if (isset($map['VbrInstanceRegionId'])) {
            $model->vbrInstanceRegionId = $map['VbrInstanceRegionId'];
        }

        return $model;
    }
}
