<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryLiveStreamingRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $cacheDuration;

    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $encryptType;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceIFrame;

    /**
     * @example C47T6xwp6ms4bNlkHRWCg4****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-cn-n6w1y59****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $playUnLimited;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example rtmp
     *
     * @var string
     */
    public $scheme;

    /**
     * @example true
     *
     * @var bool
     */
    public $shouldEncrypt;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @example 60
     *
     * @var int
     */
    public $urlValidDuration;
    protected $_name = [
        'cacheDuration'    => 'CacheDuration',
        'deviceName'       => 'DeviceName',
        'encryptType'      => 'EncryptType',
        'forceIFrame'      => 'ForceIFrame',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
        'playUnLimited'    => 'PlayUnLimited',
        'productKey'       => 'ProductKey',
        'scheme'           => 'Scheme',
        'shouldEncrypt'    => 'ShouldEncrypt',
        'streamType'       => 'StreamType',
        'urlValidDuration' => 'UrlValidDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheDuration) {
            $res['CacheDuration'] = $this->cacheDuration;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->forceIFrame) {
            $res['ForceIFrame'] = $this->forceIFrame;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->playUnLimited) {
            $res['PlayUnLimited'] = $this->playUnLimited;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }
        if (null !== $this->shouldEncrypt) {
            $res['ShouldEncrypt'] = $this->shouldEncrypt;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->urlValidDuration) {
            $res['UrlValidDuration'] = $this->urlValidDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLiveStreamingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheDuration'])) {
            $model->cacheDuration = $map['CacheDuration'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['ForceIFrame'])) {
            $model->forceIFrame = $map['ForceIFrame'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PlayUnLimited'])) {
            $model->playUnLimited = $map['PlayUnLimited'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }
        if (isset($map['ShouldEncrypt'])) {
            $model->shouldEncrypt = $map['ShouldEncrypt'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['UrlValidDuration'])) {
            $model->urlValidDuration = $map['UrlValidDuration'];
        }

        return $model;
    }
}
