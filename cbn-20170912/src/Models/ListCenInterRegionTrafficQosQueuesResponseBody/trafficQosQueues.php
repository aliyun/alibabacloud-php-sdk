<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponseBody;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description The differentiated services code point (DSCP) value that matches the current queue.
     *
     * @var int[]
     */
    public $dscps;

    /**
     * @description The percentage of bandwidth resources that can be allocated to the current queue.
     *
     * For example, a value of 1 indicates that 1 percent of bandwidth resources can be allocated to the queue.
     * @example 1
     *
     * @var int
     */
    public $remainBandwidthPercent;

    /**
     * @description The status of the queue. Valid values:
     *
     * - **Creating**: The queue is being created.
     * - **Active**: The queue is available.
     * - **Deleting**: The queue is being deleted.
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
     * @description The description of the queue.
     *
     * @example qosQueueDescription
     *
     * @var string
     */
    public $trafficQosQueueDescription;

    /**
     * @description The ID of the queue.
     *
     * @example qos-queue-siakjb2nn9gz5z****
     *
     * @var string
     */
    public $trafficQosQueueId;

    /**
     * @description The name of the queue.
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
        'dscps'                      => 'Dscps',
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
        if (null !== $this->dscps) {
            $res['Dscps'] = $this->dscps;
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
        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = $map['Dscps'];
            }
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
