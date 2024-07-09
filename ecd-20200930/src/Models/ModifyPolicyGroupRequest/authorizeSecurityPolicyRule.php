<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class authorizeSecurityPolicyRule extends Model
{
    /**
     * @description The object to which the security group rule applies. The value is an IPv4 CIDR block.
     *
     * @example 10.0.XX.XX/8
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The description of security group rule N.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The protocol type of security group rule N. Valid values:
     *
     *   tcp: TCP
     *   udp: UDP
     *   icmp: ICMP (IPv4)
     *   gre: GRE
     *   all: all protocols
     *
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The authorization policy of security group rule N. Valid values:
     *
     *   accept: specifies the Allow policy that allows all access requests.
     *   drop: specifies the Deny policy that denies all access requests. If no messages of access denied are returned, the requests time out or failed.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range of security group rule N. The value of the port range is determined by the protocol type specified by the AuthorizeSecurityPolicyRule.N.IpProtocol parameter.
     *
     *   When the AuthorizeSecurityPolicyRule.N.IpProtocol parameter is set to tcp or udp, the port range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   When AuthorizeSecurityPolicyRule.N.IpProtocol is set to icmp, set the value to -1/-1.
     *   When AuthorizeSecurityPolicyRule.N.IpProtocol is set to gre, set the value to -1/-1.
     *   When AuthorizeSecurityPolicyRule.N.IpProtocol is set to all, set the value to -1/-1.
     *
     * For more information about the common ports of typical applications, see [Common ports](https://help.aliyun.com/document_detail/40724.html).
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of security group rule N. A smaller value indicates a higher priority.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The direction of security group rule N. Valid values:
     *
     *   inflow: inbound
     *   outflow: outbound
     *
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
     * @return authorizeSecurityPolicyRule
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
