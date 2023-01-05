<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryRecordUrlRequest extends Model
{
    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example file1
     *
     * @var string
     */
    public $fileName;

    /**
     * @example VrJwPGjC1sJlqPjZA3cxg4****
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
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $seekTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $urlValidDuration;
    protected $_name = [
        'deviceName'       => 'DeviceName',
        'fileName'         => 'FileName',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
        'productKey'       => 'ProductKey',
        'seekTime'         => 'SeekTime',
        'urlValidDuration' => 'UrlValidDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->seekTime) {
            $res['SeekTime'] = $this->seekTime;
        }
        if (null !== $this->urlValidDuration) {
            $res['UrlValidDuration'] = $this->urlValidDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecordUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SeekTime'])) {
            $model->seekTime = $map['SeekTime'];
        }
        if (isset($map['UrlValidDuration'])) {
            $model->urlValidDuration = $map['UrlValidDuration'];
        }

        return $model;
    }
}
