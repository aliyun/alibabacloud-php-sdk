<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description The DSCP value that matches the current queue.
     *
     * Each QoS policy supports up to three queues. You can specify at most 60 DSCP values for each queue. Separate DSCP values with commas (,).
     * @var int[]
     */
    public $dscps;

    /**
     * @description The description of the current queue.
     *
     * The description must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The description must start with a letter.
     * @example desctest
     *
     * @var string
     */
    public $qosQueueDescription;

    /**
     * @description The name of the current queue.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example nametest
     *
     * @var string
     */
    public $qosQueueName;

    /**
     * @description The percentage of bandwidth resources that can be allocated to the current queue.
     *
     * Each QoS policy supports up to three queues. You can specify a percentage of bandwidth resources for each queue.
     *
     * If you enter **1**, it indicates that the current queue can consume at most \*\*1%\*\* of the bandwidth resources.
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
