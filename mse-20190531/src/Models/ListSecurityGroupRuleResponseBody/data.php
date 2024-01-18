<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSecurityGroupRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $authCidrs;

    /**
     * @description The rule description.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The gateway ID.
     *
     * @example 81
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-12a432a1f5da423997d8880bd32c304d
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The last modification time.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the security group authorization record.
     *
     * @example 21
     *
     * @var string
     */
    public $id;

    /**
     * @description The protocol type.
     *
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The port range.
     *
     * @example 8000/8000
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1cg6qlyjepj0y6cf2c
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'authCidrs'       => 'AuthCidrs',
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
        if (null !== $this->authCidrs) {
            $res['AuthCidrs'] = $this->authCidrs;
        }
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
        if (isset($map['AuthCidrs'])) {
            if (!empty($map['AuthCidrs'])) {
                $model->authCidrs = $map['AuthCidrs'];
            }
        }
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
