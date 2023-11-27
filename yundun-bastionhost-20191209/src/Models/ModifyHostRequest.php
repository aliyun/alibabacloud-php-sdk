<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostRequest extends Model
{
    /**
     * @description The new internal endpoint of the host. You can set this parameter to a domain name or an IP address.
     *
     * @example Host for test.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the Bastionhost instance where you want to modify the information of the host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The new name of the host. The name can be up to 128 characters.
     *
     * @example TestHost
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The new description of the host. The value can be up to 500 characters in length.
     *
     * @example 193.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The region ID of the Bastionhost instance where you want to modify the information of the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example 200.1.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description You can call this operation to modify the basic information of an on-premises host, an Elastic Compute Service (ECS) instance, or a host in a dedicated cluster.
     *
     * >  The basic information of ECS instances and hosts in dedicated clusters within your Alibaba Cloud account is synchronized to Bastionhost on a regular basis. After you modify the basic information of an ECS instance or a host in a dedicated cluster, the modification result may be overwritten by the synchronized information.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The ID of the host.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The new operating system of the host. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'            => 'Comment',
        'hostId'             => 'HostId',
        'hostName'           => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress'  => 'HostPublicAddress',
        'instanceId'         => 'InstanceId',
        'networkDomainId'    => 'NetworkDomainId',
        'OSType'             => 'OSType',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
