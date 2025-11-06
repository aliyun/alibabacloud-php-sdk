<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances;

class data extends Model
{
    /**
     * @var int
     */
    public $exchangeNum;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var int
     */
    public $queueNum;

    /**
     * @var int
     */
    public $vhostNum;
    protected $_name = [
        'exchangeNum' => 'ExchangeNum',
        'instanceNum' => 'InstanceNum',
        'instances' => 'Instances',
        'queueNum' => 'QueueNum',
        'vhostNum' => 'VhostNum',
    ];

    public function validate()
    {
        if (null !== $this->instances) {
            $this->instances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchangeNum) {
            $res['ExchangeNum'] = $this->exchangeNum;
        }

        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }

        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toArray($noStream) : $this->instances;
        }

        if (null !== $this->queueNum) {
            $res['QueueNum'] = $this->queueNum;
        }

        if (null !== $this->vhostNum) {
            $res['VhostNum'] = $this->vhostNum;
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
        if (isset($map['ExchangeNum'])) {
            $model->exchangeNum = $map['ExchangeNum'];
        }

        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }

        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }

        if (isset($map['QueueNum'])) {
            $model->queueNum = $map['QueueNum'];
        }

        if (isset($map['VhostNum'])) {
            $model->vhostNum = $map['VhostNum'];
        }

        return $model;
    }
}
