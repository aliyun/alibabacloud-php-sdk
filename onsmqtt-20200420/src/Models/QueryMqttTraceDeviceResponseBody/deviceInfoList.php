<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class deviceInfoList extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $actionInfo;
    protected $_name = [
        'channelId'  => 'ChannelId',
        'time'       => 'Time',
        'actionCode' => 'ActionCode',
        'action'     => 'Action',
        'actionInfo' => 'ActionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionInfo) {
            $res['ActionInfo'] = $this->actionInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionInfo'])) {
            $model->actionInfo = $map['ActionInfo'];
        }

        return $model;
    }
}
