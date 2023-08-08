<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody\trafficMarkingPolicies\trafficMatchRules;
use AlibabaCloud\Tea\Model;

class trafficMarkingPolicies extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $markingDscp;

    /**
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @example desctest
     *
     * @var string
     */
    public $trafficMarkingPolicyDescription;

    /**
     * @example tm-iz5egnyitxiroq****
     *
     * @var string
     */
    public $trafficMarkingPolicyId;

    /**
     * @example nametest
     *
     * @var string
     */
    public $trafficMarkingPolicyName;

    /**
     * @example Creating
     *
     * @var string
     */
    public $trafficMarkingPolicyStatus;

    /**
     * @var trafficMatchRules[]
     */
    public $trafficMatchRules;

    /**
     * @example tr-ccni***
     *
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
    }

    public function toMap()
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
            $res['TrafficMatchRules'] = [];
            if (null !== $this->trafficMatchRules && \is_array($this->trafficMatchRules)) {
                $n = 0;
                foreach ($this->trafficMatchRules as $item) {
                    $res['TrafficMatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMarkingPolicies
     */
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
                $n                        = 0;
                foreach ($map['TrafficMatchRules'] as $item) {
                    $model->trafficMatchRules[$n++] = null !== $item ? trafficMatchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
