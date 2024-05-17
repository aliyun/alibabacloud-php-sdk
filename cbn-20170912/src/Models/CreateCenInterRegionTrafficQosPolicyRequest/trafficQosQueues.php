<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description The Differentiated Services Code Point (DSCP) value that matches the current queue.
     *
     * Each QoS policy supports at most three queues. You can specify at most 60 DSCP values for each queue. Separate multiple DCSP values with commas (,).
     * @var int[]
     */
    public $dscps;

    /**
     * @description The description of the current queue.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length and cannot start with http:// or https://.
     * @example desctest
     *
     * @var string
     */
    public $qosQueueDescription;

    /**
     * @description The name of the current queue.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example nametest
     *
     * @var string
     */
    public $qosQueueName;

    /**
     * @description The percentage of the inter-region bandwidth that can be used by the queue.
     *
     * Each QoS policy supports at most three queues. You can specify a valid percentage for each queue.
     *
     * For example, a value of **1** specifies that the queue can consume 1% of the inter-region bandwidth.
     *
     * >  The sum of the percentage values of all the queues in a QoS policy cannot exceed 100%.
     * @example 1
     *
     * @var string
     */
    public $remainBandwidthPercent;
    protected $_name = [
        'dscps'                  => 'Dscps',
        'qosQueueDescription'    => 'QosQueueDescription',
        'qosQueueName'           => 'QosQueueName',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
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
        if (null !== $this->qosQueueDescription) {
            $res['QosQueueDescription'] = $this->qosQueueDescription;
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
        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = $map['Dscps'];
            }
        }
        if (isset($map['QosQueueDescription'])) {
            $model->qosQueueDescription = $map['QosQueueDescription'];
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
