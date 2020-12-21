<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponseBody\channelList;
use AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceConfigResponseBody\OSDList;
use AlibabaCloud\Tea\Model;

class GetDeviceConfigResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $audioEnable;

    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string
     */
    public $bitRate;

    /**
     * @var string
     */
    public $deviceAddress;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $encodeFormat;

    /**
     * @var string
     */
    public $frameRate;

    /**
     * @var int
     */
    public $govLength;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var OSDList[]
     */
    public $OSDList;

    /**
     * @var string
     */
    public $OSDTimeEnable;

    /**
     * @var string
     */
    public $OSDTimeType;

    /**
     * @var string
     */
    public $OSDTimeX;

    /**
     * @var string
     */
    public $OSDTimeY;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $passWord;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $serverPort;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var channelList[]
     */
    public $channelList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'message'       => 'Message',
        'retryInterval' => 'RetryInterval',
        'code'          => 'Code',
        'audioEnable'   => 'AudioEnable',
        'audioFormat'   => 'AudioFormat',
        'bitRate'       => 'BitRate',
        'deviceAddress' => 'DeviceAddress',
        'deviceName'    => 'DeviceName',
        'encodeFormat'  => 'EncodeFormat',
        'frameRate'     => 'FrameRate',
        'govLength'     => 'GovLength',
        'latitude'      => 'Latitude',
        'longitude'     => 'Longitude',
        'OSDList'       => 'OSDList',
        'OSDTimeEnable' => 'OSDTimeEnable',
        'OSDTimeType'   => 'OSDTimeType',
        'OSDTimeX'      => 'OSDTimeX',
        'OSDTimeY'      => 'OSDTimeY',
        'resolution'    => 'Resolution',
        'deviceId'      => 'DeviceId',
        'userName'      => 'UserName',
        'passWord'      => 'PassWord',
        'protocol'      => 'Protocol',
        'serverId'      => 'ServerId',
        'serverPort'    => 'ServerPort',
        'serverIp'      => 'ServerIp',
        'channelList'   => 'ChannelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->audioEnable) {
            $res['AudioEnable'] = $this->audioEnable;
        }
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->encodeFormat) {
            $res['EncodeFormat'] = $this->encodeFormat;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->govLength) {
            $res['GovLength'] = $this->govLength;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->OSDList) {
            $res['OSDList'] = [];
            if (null !== $this->OSDList && \is_array($this->OSDList)) {
                $n = 0;
                foreach ($this->OSDList as $item) {
                    $res['OSDList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OSDTimeEnable) {
            $res['OSDTimeEnable'] = $this->OSDTimeEnable;
        }
        if (null !== $this->OSDTimeType) {
            $res['OSDTimeType'] = $this->OSDTimeType;
        }
        if (null !== $this->OSDTimeX) {
            $res['OSDTimeX'] = $this->OSDTimeX;
        }
        if (null !== $this->OSDTimeY) {
            $res['OSDTimeY'] = $this->OSDTimeY;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->channelList) {
            $res['ChannelList'] = [];
            if (null !== $this->channelList && \is_array($this->channelList)) {
                $n = 0;
                foreach ($this->channelList as $item) {
                    $res['ChannelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['AudioEnable'])) {
            $model->audioEnable = $map['AudioEnable'];
        }
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EncodeFormat'])) {
            $model->encodeFormat = $map['EncodeFormat'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['GovLength'])) {
            $model->govLength = $map['GovLength'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['OSDList'])) {
            if (!empty($map['OSDList'])) {
                $model->OSDList = [];
                $n              = 0;
                foreach ($map['OSDList'] as $item) {
                    $model->OSDList[$n++] = null !== $item ? OSDList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OSDTimeEnable'])) {
            $model->OSDTimeEnable = $map['OSDTimeEnable'];
        }
        if (isset($map['OSDTimeType'])) {
            $model->OSDTimeType = $map['OSDTimeType'];
        }
        if (isset($map['OSDTimeX'])) {
            $model->OSDTimeX = $map['OSDTimeX'];
        }
        if (isset($map['OSDTimeY'])) {
            $model->OSDTimeY = $map['OSDTimeY'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ChannelList'])) {
            if (!empty($map['ChannelList'])) {
                $model->channelList = [];
                $n                  = 0;
                foreach ($map['ChannelList'] as $item) {
                    $model->channelList[$n++] = null !== $item ? channelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
