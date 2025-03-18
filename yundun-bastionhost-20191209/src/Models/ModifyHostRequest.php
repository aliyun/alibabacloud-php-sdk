<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostRequest extends Model
{
    /**
     * @description The new description of the host. The description can be up to 500 characters in length.
     *
     * @example Host for test.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the host.
     *
     * > You can call the [ListHosts](https://help.aliyun.com/document_detail/200665.html) operation to query the ID of the host.
     *
     * This parameter is required.
     *
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
     * @description The new internal endpoint of the host. You can set this parameter to a domain name or an IP address.
     *
     * @example 193.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The new public endpoint of the host. You can set this parameter to a domain name or an IP address.
     *
     * @example 200.1.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description The ID of the bastion host on which you want to modify the information about the host.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the ID of the bastion host.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the new network domain to which the host belongs.
     *
     * > You can call the [ListNetworkDomains](https://help.aliyun.com/document_detail/2758827.html) operation to query the network domain ID.
     *
     * @example 1
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The new operating system of the host. Valid values:
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
     * @var string
     */
    public $prefKex;

    /**
     * @description The region ID of the bastion host on which you want to modify the information about the host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment' => 'Comment',
        'hostId' => 'HostId',
        'hostName' => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress' => 'HostPublicAddress',
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'OSType' => 'OSType',
        'prefKex' => 'PrefKex',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
        if (null !== $this->prefKex) {
            $res['PrefKex'] = $this->prefKex;
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
        if (isset($map['PrefKex'])) {
            $model->prefKex = $map['PrefKex'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
