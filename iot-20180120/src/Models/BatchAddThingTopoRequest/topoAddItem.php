<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest;

use AlibabaCloud\Tea\Model;

class topoAddItem extends Model
{
    /**
     * @example a1BwAGV****device1
     *
     * @var string
     */
    public $clientId;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example C1C1606D61884C5F16C9EA6622E5****
     *
     * @var string
     */
    public $sign;

    /**
     * @example hmacMd5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @example 1579335899000
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'clientId'   => 'ClientId',
        'deviceName' => 'DeviceName',
        'productKey' => 'ProductKey',
        'sign'       => 'Sign',
        'signMethod' => 'SignMethod',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topoAddItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
