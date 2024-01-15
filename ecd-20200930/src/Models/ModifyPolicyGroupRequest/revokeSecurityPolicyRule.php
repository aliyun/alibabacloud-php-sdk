<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class revokeSecurityPolicyRule extends Model
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
     * @description The protocol type of the security group rule. Valid values:
     *
     * TCP
     * UDP
     * ICMP: ICMP (IPv4)
     * GRE
     * ALL
     *
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The authorization policy of the security group rule that you want to delete. Valid values:
     *
     * accept: allows all access requests.
     * drop: disallows all access requests. If no denied messages are returned, the requests timed out or failed.
     *
     * Default value: accept.
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range of the security group rule that you want to delete. The value of the port range is determined by the protocol type specified by the IpProtocol parameter.
     *
     * If the IpProtocol parameter is set to TCP or UDP, the port range is 1 to 65535. The start port number and the end port number are separated by a forward slash (/). Example: 1/200.
     * If the IpProtocol parameter is set to ICMP, the port range is -1/-1.
     * If the IpProtocol parameter is set to GRE, the port range is -1/-1.
     * If the IpProtocol parameter is set to ALL, the port range is -1/-1.
     *
     * For more information about the common ports of typical applications, see [Common ports](https://www.alibabacloud.com/help/en/ecs/user-guide/common-ports?spm=a2c63.p38356.0.0.56b87f2c2SJTAw).
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value indicates a higher priority.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The direction of the security group rule that you want to delete. Valid values:
     *
     * inflow: inbound
     * outflow: outbound
     *
     * @example outflow
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
     * @return revokeSecurityPolicyRule
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
