<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesRequest;

use AlibabaCloud\Tea\Model;

class egressRules extends Model
{
    /**
     * @description The protocol that is used by the outbound traffic to be mirrored. Valid values:
     *
     *   **ALL**: all protocols
     *   **ICMP**: ICMP
     *   **TCP**: TCP
     *   **UDP**: UDP
     *
     * @example accept
     *
     * @var string
     */
    public $action;

    /**
     * @description The ID of the region to which the mirrored traffic belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list. For more information about regions that support traffic mirroring, see [Overview of traffic mirroring](~~207513~~).
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The destination CIDR block of the outbound traffic.
     *
     * @example 22/40
     *
     * @var string
     */
    public $destinationPortRange;

    /**
     * @description The source port range of the outbound traffic. Valid values for a port: **1** to **65535**. Separate the first port and the last port with a forward slash (/). Examples: **1/200** and **80/80**. You cannot set this parameter to only **-1/-1**, which specifies all ports.
     *
     * >  If you set **EgressRules.N.Protocol** to **ALL** or **ICMP**, you do not need to set this parameter. In this case, all ports are available.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The priority of the outbound rule. A smaller value indicates a higher priority. The maximum value of **N** is **10**. You can configure up to 10 outbound rules for a filter.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The destination port range of the outbound traffic. Valid values for a port: **1** to **65535**. Separate the first port and the last port with a forward slash (/). Examples: **1/200** and **80/80**. You cannot set this parameter to only **-1/-1**, which specifies all ports.
     *
     * >  If you set **EgressRules.N.Protocol** to **ALL** or **ICMP**, you do not need to set this parameter. In this case, all ports are available.
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @description The ID of the request.
     *
     * @example 22/40
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'action'               => 'Action',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'destinationPortRange' => 'DestinationPortRange',
        'priority'             => 'Priority',
        'protocol'             => 'Protocol',
        'sourceCidrBlock'      => 'SourceCidrBlock',
        'sourcePortRange'      => 'SourcePortRange',
    ];

    public function validate()
    {
    }

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
     * @return egressRules
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
