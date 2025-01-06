<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies\trafficQosQueues;
use AlibabaCloud\Tea\Model;

class trafficQosPolicies extends Model
{
    /**
     * @description The guaranteed bandwidth mode.
     *
     *   **byBandwidth**: allocates absolute bandwidth values to QoS queues.
     *   **byBandwidthPercent**: assigns bandwidth percentages to QoS queues.
     *
     * @example byBandwidthPercent
     *
     * @var string
     */
    public $bandwidthGuaranteeMode;

    /**
     * @description The description of the QoS policy.
     *
     * @example desctest
     *
     * @var string
     */
    public $trafficQosPolicyDescription;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-rnghap5gc8155x****
     *
     * @var string
     */
    public $trafficQosPolicyId;

    /**
     * @description The name of the QoS policy.
     *
     * @example nametest
     *
     * @var string
     */
    public $trafficQosPolicyName;

    /**
     * @description The status of the QoS policy.
     *
     *   **Creating**: The QoS policy is being created.
     *   **Active**: The QoS policy is available.
     *   **Modifying**: The policy is being modified.
     *   **Deleting**: The QoS policy is being deleted.
     *
     * @example Creating
     *
     * @var string
     */
    public $trafficQosPolicyStatus;

    /**
     * @description A list of queues.
     *
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-q7ct7c06jpw***
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-2ze4ta4v32umj0rb***
     *
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
    }

    public function toMap()
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
            $res['TrafficQosQueues'] = [];
            if (null !== $this->trafficQosQueues && \is_array($this->trafficQosQueues)) {
                $n = 0;
                foreach ($this->trafficQosQueues as $item) {
                    $res['TrafficQosQueues'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return trafficQosPolicies
     */
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
                $n                       = 0;
                foreach ($map['TrafficQosQueues'] as $item) {
                    $model->trafficQosQueues[$n++] = null !== $item ? trafficQosQueues::fromMap($item) : $item;
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
