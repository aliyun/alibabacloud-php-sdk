<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateHostRequest extends Model
{
    /**
     * @description The endpoint type of the host that you want to create. Valid values:
     *
     *   **Public**: public endpoint
     *   **Private**: internal endpoint
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The description of the host that you want to create. The value can be up to 500 characters in length.
     *
     * @example Local Host
     *
     * @var string
     */
    public $comment;

    /**
     * @description The name of the host that you want to create. The name can be up to 128 characters in length.
     *
     * @example host01
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The internal endpoint of the host that you want to create. You can set this parameter to a domain name or an IP address.
     *
     * > This parameter is required if the **ActiveAddressType** parameter is set to **Private**.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The public endpoint of the host that you want to create. You can set this parameter to a domain name or an IP address.
     *
     * > This parameter is required if the **ActiveAddressType** parameter is set to **Public**.
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description The ID of the bastion host in which you want to create the host.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region to which the ECS instance or the host in an ApsaraDB MyBase dedicated cluster belongs.
     *
     * > This parameter is required if the **Source** parameter is set to **Ecs** or **Rds**.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The ID of the network domain to which the host belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The operating system of the host that you want to create. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The region ID of the bastion host in which you want to create the host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source of the host that you want to create. Valid values:
     *
     *   **Local**: a host in a data center
     *   **Ecs**: an Elastic Compute Service (ECS) instance
     *   **Rds**: a host in an ApsaraDB MyBase dedicated cluster
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the ECS instance or the host in an ApsaraDB MyBase dedicated cluster.
     *
     * > This parameter is required if the **Source** parameter is set to **Ecs** or **Rds**.
     * @example i-dfabfda
     *
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'activeAddressType'  => 'ActiveAddressType',
        'comment'            => 'Comment',
        'hostName'           => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress'  => 'HostPublicAddress',
        'instanceId'         => 'InstanceId',
        'instanceRegionId'   => 'InstanceRegionId',
        'networkDomainId'    => 'NetworkDomainId',
        'OSType'             => 'OSType',
        'regionId'           => 'RegionId',
        'source'             => 'Source',
        'sourceInstanceId'   => 'SourceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }
        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }
        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
