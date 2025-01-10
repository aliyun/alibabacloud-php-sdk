<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListElasticNetworkInterfacesResponseBody\content;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the data address was created.
     *
     * @example 1601176751000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance description.
     *
     * @example No description
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
     * @example 1640187007000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The IP address of the BE cluster.
     *
     * @example 10.0.0.13
     *
     * @var string
     */
    public $ip;

    /**
     * @description mac address
     *
     * @example E0:01:A6:4A:6A:D0
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
     * @description The ID of the node.
     *
     * @example e01-cn-uax37m1****
     *
     * @var string
     */
    public $nodeId;

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
     * @example sg-f8z4wr1b41x3qsc9****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description network interface controller type, the default type DEFAULT cannot be manually released
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
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-f8ziirfl9k25h2qn7****
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
        'gateway'                   => 'Gateway',
        'gmtModified'               => 'GmtModified',
        'ip'                        => 'Ip',
        'mac'                       => 'Mac',
        'mask'                      => 'Mask',
        'message'                   => 'Message',
        'nodeId'                    => 'NodeId',
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
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
     * @return data
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
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
