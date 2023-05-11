<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddThingTopoRequest;

use AlibabaCloud\Tea\Model;

class topoAddItem extends Model
{
    /**
     * @description The client ID of the sub-device. The ID can be the serial number (SN) or media access control (MAC) address of the device. This parameter is optional.
     *
     * > If this parameter is included in the value of the **TopoAddItem.N.Sign** parameter, you must specify this parameter.
     * @example a1BwAGV****device1
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The name of each sub-device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The key of the product to which the sub-device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The signature of the sub-device.
     *
     * Set the Sign parameter to the result of the **SignMethod(deviceSecret,content)** function.
     *
     * To obtain the **content** parameter, sort all sub-device parameters that are submitted to the server, except the Sign and SignMethod parameters, in alphabetical order. Then, concatenate the parameters and values in sequence. No concatenation symbol is required to separate these parameters and values.
     *
     * For example, you want to specify the following parameters for a sub-device: **ClientId=868575026974305, DeviceName=868575026974305, ProductKey=a1PB5fp1234, SignMethod=hmacmd5, timestamp=1646277090411, and deviceSecret=1234**. In this case, the signature function is `hmacmd5(1234, clientId868575026974305deviceName868575026974305productKeya1PB5fp1234timestamp1646277090411)`, and the calculation result is `3BA0DFA4C477B40C007D84D30D6466CC`.
     *
     * >  In the preceding example, **ClientId** indicates the client ID of the sub-device. You can specify a custom client ID.
     *
     * For more information about how to calculate the signature value, see [How do I obtain MQTT parameters for authentication?](~~292635~~). The signature value is the calculated value of the passwd parameter.
     * @example C1C1606D61884C5F16C9EA6622E5****
     *
     * @var string
     */
    public $sign;

    /**
     * @description The signature algorithm. Valid values: **hmacSha1**, **hmacSha256**, **hmacMd5**, and **Sha256**. The value is not case-sensitive.
     *
     * @example hmacMd5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @description The timestamp in UTC. This parameter is optional.
     *
     * > If this parameter is included in the value of the **TopoAddItem.N.Sign** parameter, you must specify this parameter.
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
