<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody\mqttClientInfoDo\subScriptonData;
use AlibabaCloud\Tea\Model;

class mqttClientInfoDo extends Model
{
    /**
     * @var bool
     */
    public $online;

    /**
     * @var int
     */
    public $lastTouch;

    /**
     * @var string
     */
    public $socketChannel;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var subScriptonData
     */
    public $subScriptonData;
    protected $_name = [
        'online'          => 'Online',
        'lastTouch'       => 'LastTouch',
        'socketChannel'   => 'SocketChannel',
        'clientId'        => 'ClientId',
        'subScriptonData' => 'SubScriptonData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->lastTouch) {
            $res['LastTouch'] = $this->lastTouch;
        }
        if (null !== $this->socketChannel) {
            $res['SocketChannel'] = $this->socketChannel;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->subScriptonData) {
            $res['SubScriptonData'] = null !== $this->subScriptonData ? $this->subScriptonData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mqttClientInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['LastTouch'])) {
            $model->lastTouch = $map['LastTouch'];
        }
        if (isset($map['SocketChannel'])) {
            $model->socketChannel = $map['SocketChannel'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['SubScriptonData'])) {
            $model->subScriptonData = subScriptonData::fromMap($map['SubScriptonData']);
        }

        return $model;
    }
}
