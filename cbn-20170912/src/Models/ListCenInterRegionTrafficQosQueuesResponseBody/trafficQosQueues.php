<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponseBody;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description The absolute bandwidth value that can be allocated to the current queue.
     *
     * A value of **1** indicates that the QoS queue can consume at most 1 Mbit/s of inter-region bandwidth.
     * @example 1
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The Differentiated Services Code Point (DSCP) value that matches the current QoS queue.
     *
     * @var int[]
     */
    public $dscps;

    /**
     * @description The actual bandwidth of the current queue.
     *
     * @example 1.35
     *
     * @var string
     */
    public $effectiveBandwidth;

    /**
     * @description The percentage of bandwidth that can be allocated to the current queue.
     *
     * A value of **1** indicates that the QoS queue can consume at most 1% of the inter-region bandwidth.
     * @example 1
     *
     * @var int
     */
    public $remainBandwidthPercent;

    /**
     * @description The status of the QoS queue. Valid values:
     *
     *   **Creating**
     *   **Active**
     *   **Deleting**
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-fv2qq9yqrsjowp****
     *
     * @var string
     */
    public $trafficQosPolicyId;

    /**
     * @description The description of the QoS queue.
     *
     * @example qosQueueDescription
     *
     * @var string
     */
    public $trafficQosQueueDescription;

    /**
     * @description The ID of the QoS queue.
     *
     * @example qos-queue-siakjb2nn9gz5z****
     *
     * @var string
     */
    public $trafficQosQueueId;

    /**
     * @description The name of the QoS queue.
     *
     * @example qosQueueName
     *
     * @var string
     */
    public $trafficQosQueueName;

    /**
     * @description The ID of the inter-region connection.
     *
     * @example tr-attach-nzrcv25d7ezt23****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-p0wwagjv6fvxt4b7y****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'bandwidth'                  => 'Bandwidth',
        'dscps'                      => 'Dscps',
        'effectiveBandwidth'         => 'EffectiveBandwidth',
        'remainBandwidthPercent'     => 'RemainBandwidthPercent',
        'status'                     => 'Status',
        'trafficQosPolicyId'         => 'TrafficQosPolicyId',
        'trafficQosQueueDescription' => 'TrafficQosQueueDescription',
        'trafficQosQueueId'          => 'TrafficQosQueueId',
        'trafficQosQueueName'        => 'TrafficQosQueueName',
        'transitRouterAttachmentId'  => 'TransitRouterAttachmentId',
        'transitRouterId'            => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->dscps) {
            $res['Dscps'] = $this->dscps;
        }
        if (null !== $this->effectiveBandwidth) {
            $res['EffectiveBandwidth'] = $this->effectiveBandwidth;
        }
        if (null !== $this->remainBandwidthPercent) {
            $res['RemainBandwidthPercent'] = $this->remainBandwidthPercent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }
        if (null !== $this->trafficQosQueueDescription) {
            $res['TrafficQosQueueDescription'] = $this->trafficQosQueueDescription;
        }
        if (null !== $this->trafficQosQueueId) {
            $res['TrafficQosQueueId'] = $this->trafficQosQueueId;
        }
        if (null !== $this->trafficQosQueueName) {
            $res['TrafficQosQueueName'] = $this->trafficQosQueueName;
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
     * @return trafficQosQueues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = $map['Dscps'];
            }
        }
        if (isset($map['EffectiveBandwidth'])) {
            $model->effectiveBandwidth = $map['EffectiveBandwidth'];
        }
        if (isset($map['RemainBandwidthPercent'])) {
            $model->remainBandwidthPercent = $map['RemainBandwidthPercent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }
        if (isset($map['TrafficQosQueueDescription'])) {
            $model->trafficQosQueueDescription = $map['TrafficQosQueueDescription'];
        }
        if (isset($map['TrafficQosQueueId'])) {
            $model->trafficQosQueueId = $map['TrafficQosQueueId'];
        }
        if (isset($map['TrafficQosQueueName'])) {
            $model->trafficQosQueueName = $map['TrafficQosQueueName'];
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
