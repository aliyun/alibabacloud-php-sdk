<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody\trafficMarkingPolicies\trafficMatchRules;

class trafficMarkingPolicies extends Model
{
    /**
     * @var int
     */
    public $markingDscp;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $trafficMarkingPolicyDescription;
    /**
     * @var string
     */
    public $trafficMarkingPolicyId;
    /**
     * @var string
     */
    public $trafficMarkingPolicyName;
    /**
     * @var string
     */
    public $trafficMarkingPolicyStatus;
    /**
     * @var trafficMatchRules[]
     */
    public $trafficMatchRules;
    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'markingDscp'                     => 'MarkingDscp',
        'priority'                        => 'Priority',
        'trafficMarkingPolicyDescription' => 'TrafficMarkingPolicyDescription',
        'trafficMarkingPolicyId'          => 'TrafficMarkingPolicyId',
        'trafficMarkingPolicyName'        => 'TrafficMarkingPolicyName',
        'trafficMarkingPolicyStatus'      => 'TrafficMarkingPolicyStatus',
        'trafficMatchRules'               => 'TrafficMatchRules',
        'transitRouterId'                 => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->trafficMatchRules)) {
            Model::validateArray($this->trafficMatchRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markingDscp) {
            $res['MarkingDscp'] = $this->markingDscp;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->trafficMarkingPolicyDescription) {
            $res['TrafficMarkingPolicyDescription'] = $this->trafficMarkingPolicyDescription;
        }

        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }

        if (null !== $this->trafficMarkingPolicyName) {
            $res['TrafficMarkingPolicyName'] = $this->trafficMarkingPolicyName;
        }

        if (null !== $this->trafficMarkingPolicyStatus) {
            $res['TrafficMarkingPolicyStatus'] = $this->trafficMarkingPolicyStatus;
        }

        if (null !== $this->trafficMatchRules) {
            if (\is_array($this->trafficMatchRules)) {
                $res['TrafficMatchRules'] = [];
                $n1                       = 0;
                foreach ($this->trafficMatchRules as $item1) {
                    $res['TrafficMatchRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkingDscp'])) {
            $model->markingDscp = $map['MarkingDscp'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['TrafficMarkingPolicyDescription'])) {
            $model->trafficMarkingPolicyDescription = $map['TrafficMarkingPolicyDescription'];
        }

        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }

        if (isset($map['TrafficMarkingPolicyName'])) {
            $model->trafficMarkingPolicyName = $map['TrafficMarkingPolicyName'];
        }

        if (isset($map['TrafficMarkingPolicyStatus'])) {
            $model->trafficMarkingPolicyStatus = $map['TrafficMarkingPolicyStatus'];
        }

        if (isset($map['TrafficMatchRules'])) {
            if (!empty($map['TrafficMatchRules'])) {
                $model->trafficMatchRules = [];
                $n1                       = 0;
                foreach ($map['TrafficMatchRules'] as $item1) {
                    $model->trafficMatchRules[$n1++] = trafficMatchRules::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
