<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies\trafficQosQueues;

class trafficQosPolicies extends Model
{
    /**
     * @var string
     */
    public $bandwidthGuaranteeMode;
    /**
     * @var string
     */
    public $trafficQosPolicyDescription;
    /**
     * @var string
     */
    public $trafficQosPolicyId;
    /**
     * @var string
     */
    public $trafficQosPolicyName;
    /**
     * @var string
     */
    public $trafficQosPolicyStatus;
    /**
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;
    /**
     * @var string
     */
    public $transitRouterAttachmentId;
    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'bandwidthGuaranteeMode'      => 'BandwidthGuaranteeMode',
        'trafficQosPolicyDescription' => 'TrafficQosPolicyDescription',
        'trafficQosPolicyId'          => 'TrafficQosPolicyId',
        'trafficQosPolicyName'        => 'TrafficQosPolicyName',
        'trafficQosPolicyStatus'      => 'TrafficQosPolicyStatus',
        'trafficQosQueues'            => 'TrafficQosQueues',
        'transitRouterAttachmentId'   => 'TransitRouterAttachmentId',
        'transitRouterId'             => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->trafficQosQueues)) {
            Model::validateArray($this->trafficQosQueues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthGuaranteeMode) {
            $res['BandwidthGuaranteeMode'] = $this->bandwidthGuaranteeMode;
        }

        if (null !== $this->trafficQosPolicyDescription) {
            $res['TrafficQosPolicyDescription'] = $this->trafficQosPolicyDescription;
        }

        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }

        if (null !== $this->trafficQosPolicyName) {
            $res['TrafficQosPolicyName'] = $this->trafficQosPolicyName;
        }

        if (null !== $this->trafficQosPolicyStatus) {
            $res['TrafficQosPolicyStatus'] = $this->trafficQosPolicyStatus;
        }

        if (null !== $this->trafficQosQueues) {
            if (\is_array($this->trafficQosQueues)) {
                $res['TrafficQosQueues'] = [];
                $n1                      = 0;
                foreach ($this->trafficQosQueues as $item1) {
                    $res['TrafficQosQueues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
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
        if (isset($map['BandwidthGuaranteeMode'])) {
            $model->bandwidthGuaranteeMode = $map['BandwidthGuaranteeMode'];
        }

        if (isset($map['TrafficQosPolicyDescription'])) {
            $model->trafficQosPolicyDescription = $map['TrafficQosPolicyDescription'];
        }

        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        if (isset($map['TrafficQosPolicyName'])) {
            $model->trafficQosPolicyName = $map['TrafficQosPolicyName'];
        }

        if (isset($map['TrafficQosPolicyStatus'])) {
            $model->trafficQosPolicyStatus = $map['TrafficQosPolicyStatus'];
        }

        if (isset($map['TrafficQosQueues'])) {
            if (!empty($map['TrafficQosQueues'])) {
                $model->trafficQosQueues = [];
                $n1                      = 0;
                foreach ($map['TrafficQosQueues'] as $item1) {
                    $model->trafficQosQueues[$n1++] = trafficQosQueues::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
