<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\DeleteSecurityGroupRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description.
     *
     * @example auto-description1
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the gateway.
     *
     * @example 103
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597c****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2022-01-11T14:12:55.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID.
     *
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @description The transport layer protocol. The value of this parameter is case-insensitive. Valid values:
     *
     *   icmp
     *   gre
     *   tcp
     *   udp
     *   all: All protocols are supported.
     *
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The range of ports for the transport layer protocol in the destination security group. Valid values:
     *
     *   When the IpProtocol parameter is set to tcp or udp, the port number range is 1 to 65535. The start port number and the end port number are separated by a forward slash (/). Example: 1/200.
     *   If the IpProtocol parameter is set to icmp, the port number range is -1/-1, which indicates all ports.
     *   If the IpProtocol parameter is set to gre, the port number range is -1/-1, which indicates all ports.
     *   If the IpProtocol parameter is set to all, the port number range is -1/-1, which indicates all ports.
     *
     * @example 8443/8443
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the security group.
     *
     * @example sg-uf6hgwe067prhg68agfa
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'description'     => 'Description',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'ipProtocol'      => 'IpProtocol',
        'portRange'       => 'PortRange',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
