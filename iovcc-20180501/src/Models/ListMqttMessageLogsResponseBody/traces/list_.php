<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttMessageLogsResponseBody\traces;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientMid;
    protected $_name = [
        'time'      => 'Time',
        'topic'     => 'Topic',
        'type'      => 'Type',
        'action'    => 'Action',
        'mid'       => 'Mid',
        'clientId'  => 'ClientId',
        'clientMid' => 'ClientMid',
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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientMid) {
            $res['ClientMid'] = $this->clientMid;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientMid'])) {
            $model->clientMid = $map['ClientMid'];
        }

        return $model;
    }
}
