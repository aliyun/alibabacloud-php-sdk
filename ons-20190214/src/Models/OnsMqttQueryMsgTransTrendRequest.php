<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsMqttQueryMsgTransTrendRequest extends Model
{
    /**
     * @var string
     */
    public $tpsType;

    /**
     * @var string
     */
    public $transType;

    /**
     * @var string
     */
    public $parentTopic;

    /**
     * @var string
     */
    public $subTopic;

    /**
     * @var string
     */
    public $msgType;

    /**
     * @var int
     */
    public $qos;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'tpsType'     => 'TpsType',
        'transType'   => 'TransType',
        'parentTopic' => 'ParentTopic',
        'subTopic'    => 'SubTopic',
        'msgType'     => 'MsgType',
        'qos'         => 'Qos',
        'beginTime'   => 'BeginTime',
        'endTime'     => 'EndTime',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tpsType) {
            $res['TpsType'] = $this->tpsType;
        }
        if (null !== $this->transType) {
            $res['TransType'] = $this->transType;
        }
        if (null !== $this->parentTopic) {
            $res['ParentTopic'] = $this->parentTopic;
        }
        if (null !== $this->subTopic) {
            $res['SubTopic'] = $this->subTopic;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsMqttQueryMsgTransTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TpsType'])) {
            $model->tpsType = $map['TpsType'];
        }
        if (isset($map['TransType'])) {
            $model->transType = $map['TransType'];
        }
        if (isset($map['ParentTopic'])) {
            $model->parentTopic = $map['ParentTopic'];
        }
        if (isset($map['SubTopic'])) {
            $model->subTopic = $map['SubTopic'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
