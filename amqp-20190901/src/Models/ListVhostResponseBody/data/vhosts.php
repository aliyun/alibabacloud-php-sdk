<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListVhostResponseBody\data;

use AlibabaCloud\Dara\Model;

class vhosts extends Model
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
     * @var string
     */
    public $name;
    protected $_name = [
        'channelNum' => 'ChannelNum',
        'connectionNum' => 'ConnectionNum',
        'name' => 'Name',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
