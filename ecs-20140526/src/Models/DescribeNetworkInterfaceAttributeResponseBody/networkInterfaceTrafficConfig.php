<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class networkInterfaceTrafficConfig extends Model
{
    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @var int
     */
    public $queueNumber;

    /**
     * @var int
     */
    public $queuePairNumber;
    protected $_name = [
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueNumber' => 'QueueNumber',
        'queuePairNumber' => 'QueuePairNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }

        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }

        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
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
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }

        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }

        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }

        return $model;
    }
}
