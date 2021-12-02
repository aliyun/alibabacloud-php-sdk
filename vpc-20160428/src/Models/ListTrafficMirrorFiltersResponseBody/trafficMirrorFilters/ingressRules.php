<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters;

use AlibabaCloud\Tea\Model;

class ingressRules extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $destinationPortRange;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $trafficDirection;

    /**
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @var string
     */
    public $trafficMirrorFilterRuleId;

    /**
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
