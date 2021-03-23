<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttMessageResponseBody;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $qoS;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'mid'     => 'Mid',
        'appKey'  => 'AppKey',
        'topic'   => 'Topic',
        'qoS'     => 'QoS',
        'payload' => 'Payload',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->qoS) {
            $res['QoS'] = $this->qoS;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['QoS'])) {
            $model->qoS = $map['QoS'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
