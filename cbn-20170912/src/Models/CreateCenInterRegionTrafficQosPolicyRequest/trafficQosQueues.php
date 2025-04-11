<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenInterRegionTrafficQosPolicyRequest;

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
    public $qosQueueDescription;

    /**
     * @var string
     */
    public $qosQueueName;

    /**
     * @var string
     */
    public $remainBandwidthPercent;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'dscps' => 'Dscps',
        'qosQueueDescription' => 'QosQueueDescription',
        'qosQueueName' => 'QosQueueName',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
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
