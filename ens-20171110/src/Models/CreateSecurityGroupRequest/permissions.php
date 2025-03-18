<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The description of the SDG.
     *
     * >  We recommend that you specify this parameter in details for subsequent queries.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The direction in which the security group rule is applied.
     *
     * This parameter is required.
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description The protocol. The values of this parameter are case-insensitive. Valid values:
     *
     *   TCP.
     *   UDP.
     *   ICMP.
     *   ICMPv6.
     *   GRE.
     *   ALL: All protocols are supported.
     *
     * This parameter is required.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The action of the security group rule. Valid values:
     *
     *   accept: allows inbound access.
     *   drop: denies inbound access and returns no responses. In this case, the request times out or the connection cannot be established.
     *
     * Default value: accept.
     *
     * This parameter is required.
     *
     * @example Accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination port numbers for the protocols specified in the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Specify a port range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1, which indicates all port numbers.
     *
     * This parameter is required.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value specifies a higher priority. Valid values: 1 to 100.
     *
     * Default value: 1.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The source IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The range of source port numbers for the protocols specified in the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Specify a port number range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1, which indicates all port numbers.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * @example 22/22
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'description' => 'Description',
        'destCidrIp' => 'DestCidrIp',
        'direction' => 'Direction',
        'ipProtocol' => 'IpProtocol',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'priority' => 'Priority',
        'sourceCidrIp' => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
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
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
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
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
