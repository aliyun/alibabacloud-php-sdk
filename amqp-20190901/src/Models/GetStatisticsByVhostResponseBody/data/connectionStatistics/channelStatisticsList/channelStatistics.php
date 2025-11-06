<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data\connectionStatistics\channelStatisticsList;

use AlibabaCloud\Dara\Model;

class channelStatistics extends Model
{
    /**
     * @var float
     */
    public $ackQps;

    /**
     * @var float
     */
    public $confirmQps;

    /**
     * @var float
     */
    public $deliverQps;

    /**
     * @var float
     */
    public $getQps;

    /**
     * @var int
     */
    public $prefetch;

    /**
     * @var float
     */
    public $publishQps;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $unacked;

    /**
     * @var int
     */
    public $unconfirmed;
    protected $_name = [
        'ackQps' => 'AckQps',
        'confirmQps' => 'ConfirmQps',
        'deliverQps' => 'DeliverQps',
        'getQps' => 'GetQps',
        'prefetch' => 'Prefetch',
        'publishQps' => 'PublishQps',
        'state' => 'State',
        'unacked' => 'Unacked',
        'unconfirmed' => 'Unconfirmed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackQps) {
            $res['AckQps'] = $this->ackQps;
        }

        if (null !== $this->confirmQps) {
            $res['ConfirmQps'] = $this->confirmQps;
        }

        if (null !== $this->deliverQps) {
            $res['DeliverQps'] = $this->deliverQps;
        }

        if (null !== $this->getQps) {
            $res['GetQps'] = $this->getQps;
        }

        if (null !== $this->prefetch) {
            $res['Prefetch'] = $this->prefetch;
        }

        if (null !== $this->publishQps) {
            $res['PublishQps'] = $this->publishQps;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->unacked) {
            $res['Unacked'] = $this->unacked;
        }

        if (null !== $this->unconfirmed) {
            $res['Unconfirmed'] = $this->unconfirmed;
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
        if (isset($map['AckQps'])) {
            $model->ackQps = $map['AckQps'];
        }

        if (isset($map['ConfirmQps'])) {
            $model->confirmQps = $map['ConfirmQps'];
        }

        if (isset($map['DeliverQps'])) {
            $model->deliverQps = $map['DeliverQps'];
        }

        if (isset($map['GetQps'])) {
            $model->getQps = $map['GetQps'];
        }

        if (isset($map['Prefetch'])) {
            $model->prefetch = $map['Prefetch'];
        }

        if (isset($map['PublishQps'])) {
            $model->publishQps = $map['PublishQps'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Unacked'])) {
            $model->unacked = $map['Unacked'];
        }

        if (isset($map['Unconfirmed'])) {
            $model->unconfirmed = $map['Unconfirmed'];
        }

        return $model;
    }
}
