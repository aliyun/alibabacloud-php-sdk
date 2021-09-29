<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttMessageLogsResponseBody\traces;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $clientMid;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'type'      => 'Type',
        'time'      => 'Time',
        'action'    => 'Action',
        'topic'     => 'Topic',
        'mid'       => 'Mid',
        'clientMid' => 'ClientMid',
        'clientId'  => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->clientMid) {
            $res['ClientMid'] = $this->clientMid;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['ClientMid'])) {
            $model->clientMid = $map['ClientMid'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
