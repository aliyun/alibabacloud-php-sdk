<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class authorizeSecurityPolicyRules extends Model
{
    /**
     * @description The IPv4 CIDR block of the security group rule.
     *
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The description of the security group rule.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The protocol type of the security group rule.
     *
     * Valid values:
     *
     *   tcp: Transmission Control Protocol (TCP)
     *
     * <!-- -->
     *
     *   udp: User Datagram Protocol (UDP)
     *
     * <!-- -->
     *
     *   all: all protocols
     *
     * <!-- -->
     *
     *   gre: Generic Routing Encapsulation (GRE)
     *
     * <!-- -->
     *
     *   icmp: ICMP (IPv4)
     *
     * <!-- -->
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The authorization policy of the security group rule.
     *
     * Valid values:
     *
     *   drop: denies all access requests.
     *
     * <!-- -->
     *
     *   accept: accepts all access requests.
     *
     * <!-- -->
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range of the security group rule.
     *
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The direction of the security group rule.
     *
     * Valid values:
     *
     *   outflow: outbound
     *
     * <!-- -->
     *
     *   inflow: inbound
     *
     * <!-- -->
     * @example inflow
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cidrIp'      => 'CidrIp',
        'description' => 'Description',
        'ipProtocol'  => 'IpProtocol',
        'policy'      => 'Policy',
        'portRange'   => 'PortRange',
        'priority'    => 'Priority',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizeSecurityPolicyRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
