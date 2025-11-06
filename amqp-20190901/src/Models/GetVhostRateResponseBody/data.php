<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostRateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $channelNum;

    /**
     * @var int
     */
    public $connectionNum;

    /**
     * @var int
     */
    public $inQps;

    /**
     * @var int
     */
    public $outQps;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'channelNum' => 'ChannelNum',
        'connectionNum' => 'ConnectionNum',
        'inQps' => 'InQps',
        'outQps' => 'OutQps',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelNum) {
            $res['ChannelNum'] = $this->channelNum;
        }

        if (null !== $this->connectionNum) {
            $res['ConnectionNum'] = $this->connectionNum;
        }

        if (null !== $this->inQps) {
            $res['InQps'] = $this->inQps;
        }

        if (null !== $this->outQps) {
            $res['OutQps'] = $this->outQps;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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
        if (isset($map['ChannelNum'])) {
            $model->channelNum = $map['ChannelNum'];
        }

        if (isset($map['ConnectionNum'])) {
            $model->connectionNum = $map['ConnectionNum'];
        }

        if (isset($map['InQps'])) {
            $model->inQps = $map['InQps'];
        }

        if (isset($map['OutQps'])) {
            $model->outQps = $map['OutQps'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
