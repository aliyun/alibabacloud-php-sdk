<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters;

use AlibabaCloud\Tea\Model;

class egressRules extends Model
{
    /**
     * @description The action of the outbound rule. Valid values:
     *
     *   **accept**: collects network traffic.
     *   **drop**: does not collect network traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $action;

    /**
     * @description The destination CIDR block of the outbound traffic.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The destination port range of the outbound traffic.
     *
     * @example 22/40
     *
     * @var string
     */
    public $destinationPortRange;

    /**
     * @description The priority of the outbound rule. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The protocol that is used by the outbound traffic to be mirrored. Valid values:
     *
     *   **ALL**: all protocols
     *   **ICMP**: ICMP
     *   **TCP**: TCP
     *   **UDP**: UDP
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block of the outbound traffic.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @description The source port range of the outbound traffic.
     *
     * @example 22/40
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The direction of the network traffic. Valid values:
     *
     *   **egress**: outbound
     *   **ingress**: inbound
     *
     * @example egress
     *
     * @var string
     */
    public $trafficDirection;

    /**
     * @description The ID of the filter associated with the outbound rule.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The ID of the outbound rule.
     *
     * @example tmr-j6c89rzmtd3hhdugq****
     *
     * @var string
     */
    public $trafficMirrorFilterRuleId;

    /**
     * @description The status of the outbound rule. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Deleting**
     *
     * @example Created
     *
     * @var string
     */
    public $trafficMirrorFilterRuleStatus;
    protected $_name = [
        'action'                        => 'Action',
        'destinationCidrBlock'          => 'DestinationCidrBlock',
        'destinationPortRange'          => 'DestinationPortRange',
        'priority'                      => 'Priority',
        'protocol'                      => 'Protocol',
        'sourceCidrBlock'               => 'SourceCidrBlock',
        'sourcePortRange'               => 'SourcePortRange',
        'trafficDirection'              => 'TrafficDirection',
        'trafficMirrorFilterId'         => 'TrafficMirrorFilterId',
        'trafficMirrorFilterRuleId'     => 'TrafficMirrorFilterRuleId',
        'trafficMirrorFilterRuleStatus' => 'TrafficMirrorFilterRuleStatus',
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
        if (null !== $this->trafficDirection) {
            $res['TrafficDirection'] = $this->trafficDirection;
        }
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorFilterRuleId) {
            $res['TrafficMirrorFilterRuleId'] = $this->trafficMirrorFilterRuleId;
        }
        if (null !== $this->trafficMirrorFilterRuleStatus) {
            $res['TrafficMirrorFilterRuleStatus'] = $this->trafficMirrorFilterRuleStatus;
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
        if (isset($map['TrafficDirection'])) {
            $model->trafficDirection = $map['TrafficDirection'];
        }
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorFilterRuleId'])) {
            $model->trafficMirrorFilterRuleId = $map['TrafficMirrorFilterRuleId'];
        }
        if (isset($map['TrafficMirrorFilterRuleStatus'])) {
            $model->trafficMirrorFilterRuleStatus = $map['TrafficMirrorFilterRuleStatus'];
        }

        return $model;
    }
}
