<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceVodUrlByTimeRequest extends Model
{
    /**
     * @example 1508200012
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 0
     *
     * @var int
     */
    public $encryptType;

    /**
     * @example 1582420940
     *
     * @var int
     */
    public $endTime;

    /**
     * @example C47T6xwp6ms4bNlkHRWCg4****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-cn-n6w1y****
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
     * @example 0
     *
     * @var int
     */
    public $seekTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $shouldEncrypt;

    /**
     * @example 60
     *
     * @var int
     */
    public $urlValidDuration;
    protected $_name = [
        'beginTime'        => 'BeginTime',
        'deviceName'       => 'DeviceName',
        'encryptType'      => 'EncryptType',
        'endTime'          => 'EndTime',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
        'playUnLimited'    => 'PlayUnLimited',
        'productKey'       => 'ProductKey',
        'scheme'           => 'Scheme',
        'seekTime'         => 'SeekTime',
        'shouldEncrypt'    => 'ShouldEncrypt',
        'urlValidDuration' => 'UrlValidDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->seekTime) {
            $res['SeekTime'] = $this->seekTime;
        }
        if (null !== $this->shouldEncrypt) {
            $res['ShouldEncrypt'] = $this->shouldEncrypt;
        }
        if (null !== $this->urlValidDuration) {
            $res['UrlValidDuration'] = $this->urlValidDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceVodUrlByTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['SeekTime'])) {
            $model->seekTime = $map['SeekTime'];
        }
        if (isset($map['ShouldEncrypt'])) {
            $model->shouldEncrypt = $map['ShouldEncrypt'];
        }
        if (isset($map['UrlValidDuration'])) {
            $model->urlValidDuration = $map['UrlValidDuration'];
        }

        return $model;
    }
}
