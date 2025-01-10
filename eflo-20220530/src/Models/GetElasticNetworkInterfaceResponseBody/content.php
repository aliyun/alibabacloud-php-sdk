<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponseBody\content\ipv6Addresses;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetElasticNetworkInterfaceResponseBody\content\privateIpAddresses;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The time when the data address was created.
     *
     * @example 2022-01-13 12:51:41
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance description.
     *
     * @example terraform-example
     *
     * @var string
     */
    public $description;

    /**
     * @description Lingjun Elastic Network Interface ID
     *
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description Whether to enable the jumboFrame capability
     *
     * @example True
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description vswitch gateway address
     *
     * @example 172.16.****
     *
     * @var string
     */
    public $gateway;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 2022-01-13 12:51:41
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Elastic Network Interface IP
     *
     * @example 203.107.****
     *
     * @var string
     */
    public $ip;

    /**
     * @description IPV6 address
     *
     * @var ipv6Addresses[]
     */
    public $ipv6Addresses;

    /**
     * @description mac address
     *
     * @example 00:22:6D:97:**:**
     *
     * @var string
     */
    public $mac;

    /**
     * @description vswitch mask bits
     *
     * @example 24
     *
     * @var string
     */
    public $mask;

    /**
     * @description The error message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Lingjun Node ID
     *
     * @example e01-cn-lbj3aej****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Secondary private IP address
     *
     * @var privateIpAddresses[]
     */
    public $privateIpAddresses;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-0jl5s4p4laalruk7****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The state of the private gateway.
     *
     * Valid value:
     *
     *   Create Failed: the creation failure.
     *   Delete Failed: the that failed to be deleted.
     *   Executing
     *   Available
     *   Deleting
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description NIC Type
     *
     * Valid value:
     *
     *   CUSTOM: custom type.
     *   DEFAULT: system type.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-uf6u8473r84e9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID
     *
     * @example vpc-j6ctp4n75306****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'description'               => 'Description',
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'enableJumboFrame'          => 'EnableJumboFrame',
        'gateway'                   => 'Gateway',
        'gmtModified'               => 'GmtModified',
        'ip'                        => 'Ip',
        'ipv6Addresses'             => 'Ipv6Addresses',
        'mac'                       => 'Mac',
        'mask'                      => 'Mask',
        'message'                   => 'Message',
        'nodeId'                    => 'NodeId',
        'privateIpAddresses'        => 'PrivateIpAddresses',
        'regionId'                  => 'RegionId',
        'securityGroupId'           => 'SecurityGroupId',
        'status'                    => 'Status',
        'type'                      => 'Type',
        'vSwitchId'                 => 'VSwitchId',
        'vpcId'                     => 'VpcId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipv6Addresses) {
            $res['Ipv6Addresses'] = [];
            if (null !== $this->ipv6Addresses && \is_array($this->ipv6Addresses)) {
                $n = 0;
                foreach ($this->ipv6Addresses as $item) {
                    $res['Ipv6Addresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->privateIpAddresses) {
            $res['PrivateIpAddresses'] = [];
            if (null !== $this->privateIpAddresses && \is_array($this->privateIpAddresses)) {
                $n = 0;
                foreach ($this->privateIpAddresses as $item) {
                    $res['PrivateIpAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Ipv6Addresses'])) {
            if (!empty($map['Ipv6Addresses'])) {
                $model->ipv6Addresses = [];
                $n                    = 0;
                foreach ($map['Ipv6Addresses'] as $item) {
                    $model->ipv6Addresses[$n++] = null !== $item ? ipv6Addresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PrivateIpAddresses'])) {
            if (!empty($map['PrivateIpAddresses'])) {
                $model->privateIpAddresses = [];
                $n                         = 0;
                foreach ($map['PrivateIpAddresses'] as $item) {
                    $model->privateIpAddresses[$n++] = null !== $item ? privateIpAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
