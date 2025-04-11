<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponseBody;

use AlibabaCloud\Dara\Model;

class trafficQosQueues extends Model
{
    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var int[]
     */
    public $dscps;

    /**
     * @var string
     */
    public $effectiveBandwidth;

    /**
     * @var int
     */
    public $remainBandwidthPercent;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trafficQosPolicyId;

    /**
     * @var string
     */
    public $trafficQosQueueDescription;

    /**
     * @var string
     */
    public $trafficQosQueueId;

    /**
     * @var string
     */
    public $trafficQosQueueName;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'dscps' => 'Dscps',
        'effectiveBandwidth' => 'EffectiveBandwidth',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
        'status' => 'Status',
        'trafficQosPolicyId' => 'TrafficQosPolicyId',
        'trafficQosQueueDescription' => 'TrafficQosQueueDescription',
        'trafficQosQueueId' => 'TrafficQosQueueId',
        'trafficQosQueueName' => 'TrafficQosQueueName',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->dscps)) {
            Model::validateArray($this->dscps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->dscps) {
            if (\is_array($this->dscps)) {
                $res['Dscps'] = [];
                $n1 = 0;
                foreach ($this->dscps as $item1) {
                    $res['Dscps'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = [];
                $n1 = 0;
                foreach ($map['Dscps'] as $item1) {
                    $model->dscps[$n1++] = $item1;
                }
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
