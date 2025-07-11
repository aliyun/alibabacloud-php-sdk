<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class authorizeSecurityPolicyRule extends Model
{
    /**
     * @description The object of the security group rule. Specify an IPv4 CIDR block.
     *
     * @example 10.0.XX.XX/8
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
     *   TCP: the Transmission Control Protocol (TCP) protocol.
     *   UDP: the User Datagram Protocol (UDP) protocol.
     *   ALL: any type of protocol.
     *   GRE: the Generic Routing Encapsulation (GRE) protocol.
     *   ICMP: the Internet Control Message Protocol (ICMP) for (IPv4).
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The authorization policy of the security group rule.
     *
     * Valid values:
     *
     *   drop: denies all access requests. If no \\"\\"access denied\\"\\" messages are returned, the requests either timed out or failed.
     *   accept (default): accepts all requests.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range of the security group rule. The value range of this parameter varies based on the value of IpProtocol.
     *
     *   If IpProtocol is set to TCP or UDP, the port range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If IpProtocol is set to ICMP, set the value to -1/-1.
     *   If IpProtocol is set to GRE, set the value to -1/-1.
     *   If IpProtocol is set to ALL, set the value to -1/-1.
     *
     * For more information about the common ports, see [Common ports](https://help.aliyun.com/document_detail/40724.html).
     *
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value specifies a higher priority.\\
     * Valid values: 1 to 60.\\
     * Default value: 1.
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
     *   outflow: outbound.
     *   inflow: inbound.
     *
     * @example inflow
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cidrIp' => 'CidrIp',
        'description' => 'Description',
        'ipProtocol' => 'IpProtocol',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'priority' => 'Priority',
        'type' => 'Type',
    ];

    public function validate() {}

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
