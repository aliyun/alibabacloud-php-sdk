<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesRequest;

use AlibabaCloud\Tea\Model;

class ingressRules extends Model
{
    /**
     * @description The policy of the inbound rule. Valid values:
     *
     *   **accept**: collects network traffic.
     *   **drop**: drops network traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $action;

    /**
     * @description The destination CIDR block of the inbound traffic.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The destination port range of the inbound traffic. Valid value: **1** to **65535**. Separate the first and the last port with a forward slash (/). For example, **1/200** or **80/80**.
     *
     * >  If the **IngressRules.N.Protocol** parameter is set to **ALL** or **ICMP**, you do not need to set this parameter. In this case, all ports are available.
     *
     * @example 80/120
     *
     * @var string
     */
    public $destinationPortRange;

    /**
     * @description The IP version of the instance. The following value may be returned:
     *
     *   **IPv4**: IPv4
     *   **IPv6**: IPv6
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The priority of the inbound rule. A smaller value indicates a higher priority. The maximum value of **N** is **10**. You can configure up to 10 inbound rules for a filter.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The protocol that is used by the inbound traffic to be mirrored. Valid values:
     *
     *   **ALL**: all protocols
     *   **ICMP**: Internet Control Message Protocol.
     *   **TCP**: Transmission Control Protocol.
     *   **UDP**: User Datagram Protocol.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block of the inbound traffic.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @description The source port range of the inbound traffic. Valid value: **1** to **65535**. Separate the first and last port with a forward slash (/). For example **1/200** and **80/80**. You cannot set this parameter to \\*\\*-1/-1\\*\\*, which indicates all ports.
     *
     * >  If the **IngressRules.N.Protocol** parameter is set to **ALL** or **ICMP**, you do not need to set this parameter. In this case, all ports are available.
     *
     * @example 80/120
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'action' => 'Action',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'destinationPortRange' => 'DestinationPortRange',
        'ipVersion' => 'IpVersion',
        'priority' => 'Priority',
        'protocol' => 'Protocol',
        'sourceCidrBlock' => 'SourceCidrBlock',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->destinationPortRange) {
            $res['DestinationPortRange'] = $this->destinationPortRange;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->sourceCidrBlock) {
            $res['SourceCidrBlock'] = $this->sourceCidrBlock;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DestinationPortRange'])) {
            $model->destinationPortRange = $map['DestinationPortRange'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SourceCidrBlock'])) {
            $model->sourceCidrBlock = $map['SourceCidrBlock'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
