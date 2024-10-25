<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description 带宽保障类型为按绝对值模式时，当前队列分配的跨地域带宽的值。
     *
     * @example 1
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The differentiated services code point (DSCP) value that is used to match packets.
     *
     * @var int[]
     */
    public $dscps;

    /**
     * @description 当前队列实际生效的带宽值。
     *
     * @example 1.35
     *
     * @var string
     */
    public $effectiveBandwidth;

    /**
     * @description The description of the queue.
     *
     * @example desctest
     *
     * @var string
     */
    public $qosQueueDescription;

    /**
     * @description The queue ID.
     *
     * @example qos-queue-njcrmr9fiu1jii****
     *
     * @var string
     */
    public $qosQueueId;

    /**
     * @description The name of the queue.
     *
     * @example namtest
     *
     * @var string
     */
    public $qosQueueName;

    /**
     * @description The percentage of the inter-region bandwidth that can be used by the queue.
     *
     * @example 1
     *
     * @var int
     */
    public $remainBandwidthPercent;
    protected $_name = [
        'bandwidth'              => 'Bandwidth',
        'dscps'                  => 'Dscps',
        'effectiveBandwidth'     => 'EffectiveBandwidth',
        'qosQueueDescription'    => 'QosQueueDescription',
        'qosQueueId'             => 'QosQueueId',
        'qosQueueName'           => 'QosQueueName',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
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
        if (null !== $this->qosQueueDescription) {
            $res['QosQueueDescription'] = $this->qosQueueDescription;
        }
        if (null !== $this->qosQueueId) {
            $res['QosQueueId'] = $this->qosQueueId;
        }
        if (null !== $this->qosQueueName) {
            $res['QosQueueName'] = $this->qosQueueName;
        }
        if (null !== $this->remainBandwidthPercent) {
            $res['RemainBandwidthPercent'] = $this->remainBandwidthPercent;
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
        if (isset($map['QosQueueDescription'])) {
            $model->qosQueueDescription = $map['QosQueueDescription'];
        }
        if (isset($map['QosQueueId'])) {
            $model->qosQueueId = $map['QosQueueId'];
        }
        if (isset($map['QosQueueName'])) {
            $model->qosQueueName = $map['QosQueueName'];
        }
        if (isset($map['RemainBandwidthPercent'])) {
            $model->remainBandwidthPercent = $map['RemainBandwidthPercent'];
        }

        return $model;
    }
}
