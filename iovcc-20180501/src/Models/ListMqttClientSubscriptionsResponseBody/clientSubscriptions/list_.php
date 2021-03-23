<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttClientSubscriptionsResponseBody\clientSubscriptions;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $qoS;
    protected $_name = [
        'topic' => 'Topic',
        'qoS'   => 'QoS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->qoS) {
            $res['QoS'] = $this->qoS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['QoS'])) {
            $model->qoS = $map['QoS'];
        }

        return $model;
    }
}
