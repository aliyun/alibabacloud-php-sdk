<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RevokeSecurityGroupRequest extends Model
{
    /**
     * @description The transport layer protocol. The value of this parameter is case-sensitive. Valid values:
     *
     *   tcp
     *   udp
     *   icmp
     *   gre
     *   all: all protocols.
     *
     * This parameter is required.
     * @example all
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The authorization policy. Valid values:
     *
     *   accept: allows access. This is the default value.
     *   drop: denies access and does not return responses.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination ports that correspond to the transport layer protocol for the security group rule. Valid values:
     *
     *   When the IpProtocol parameter is set to tcp or udp, the port number range is **1** to **65535**. The start port number and the end port number are separated by a forward slash (/). Correct example: **1/200**. Incorrect example: **200/1**.
     *   When the IpProtocol parameter is set to icmp, the port number range is **-1/-1**, which indicates all ports.
     *   When the IpProtocol parameter is set to gre, the port number range is **-1/-1**, which indicates all ports.
     *   When the IpProtocol parameter is set to all, the port number range is **-1/-1**, which indicates all ports.
     *
     * This parameter is required.
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. Valid values: **1** to **100**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the security group.
     *
     * This parameter is required.
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The source CIDR block. CIDR blocks and IPv4 addresses are supported. Default value: 0.0.XX.XX/0.
     *
     * This parameter is required.
     * @example 10.0.XX.XX/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The range of source ports that correspond to the transport layer protocol for the security group rule. Valid values:
     *
     *   When the IpProtocol parameter is set to tcp or udp, the port number range is **1** to **65535**. The start port number and the end port number are separated by a forward slash (/). Correct example: **1/200**. Incorrect example: **200/1**.
     *   When the IpProtocol parameter is set to icmp, the port number range is **-1/-1**, which indicates all ports.
     *   When the IpProtocol parameter is set to gre, the port number range is **-1/-1**, which indicates all ports.
     *   When the IpProtocol parameter is set to all, the port number range is **-1/-1**, which indicates all ports.
     *
     * @example 22/22
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'ipProtocol'      => 'IpProtocol',
        'policy'          => 'Policy',
        'portRange'       => 'PortRange',
        'priority'        => 'Priority',
        'securityGroupId' => 'SecurityGroupId',
        'sourceCidrIp'    => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeSecurityGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
