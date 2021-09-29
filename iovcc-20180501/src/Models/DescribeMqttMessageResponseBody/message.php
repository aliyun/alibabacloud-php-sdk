<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttMessageResponseBody;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var int
     */
    public $qoS;
    protected $_name = [
        'time'    => 'Time',
        'appKey'  => 'AppKey',
        'mid'     => 'Mid',
        'topic'   => 'Topic',
        'payload' => 'Payload',
        'qoS'     => 'QoS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->qoS) {
            $res['QoS'] = $this->qoS;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['QoS'])) {
            $model->qoS = $map['QoS'];
        }

        return $model;
    }
}
