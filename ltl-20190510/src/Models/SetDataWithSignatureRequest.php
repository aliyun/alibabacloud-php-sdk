<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class SetDataWithSignatureRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example ID2
     *
     * @var string
     */
    public $iotAuthType;

    /**
     * @example 31A200471049AEA3B8459455B4447D05DD1290A875A17792F71D5550F048****
     *
     * @var string
     */
    public $iotDataDigest;

    /**
     * @example 00CCCC098D98F2BDD8BB****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example kKpACh5****
     *
     * @var string
     */
    public $iotIdServiceProvider;

    /**
     * @example 2
     *
     * @var string
     */
    public $iotIdSource;

    /**
     * @example 3~2~010253040257****~1599722505821~50sZwIXt9jtTTIoGAkEs4THSyCMghVVaYO1w2AcvQf0vm51MQYt0nfHUT7jQ****
     *
     * @var string
     */
    public $iotSignature;

    /**
     * @example 0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97bd45c71a509d****
     *
     * @var string
     */
    public $key;

    /**
     * @example HB5jyvZWzwcM****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'apiVersion'           => 'ApiVersion',
        'iotAuthType'          => 'IotAuthType',
        'iotDataDigest'        => 'IotDataDigest',
        'iotId'                => 'IotId',
        'iotIdServiceProvider' => 'IotIdServiceProvider',
        'iotIdSource'          => 'IotIdSource',
        'iotSignature'         => 'IotSignature',
        'key'                  => 'Key',
        'productKey'           => 'ProductKey',
        'value'                => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->iotAuthType) {
            $res['IotAuthType'] = $this->iotAuthType;
        }
        if (null !== $this->iotDataDigest) {
            $res['IotDataDigest'] = $this->iotDataDigest;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotIdServiceProvider) {
            $res['IotIdServiceProvider'] = $this->iotIdServiceProvider;
        }
        if (null !== $this->iotIdSource) {
            $res['IotIdSource'] = $this->iotIdSource;
        }
        if (null !== $this->iotSignature) {
            $res['IotSignature'] = $this->iotSignature;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataWithSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['IotAuthType'])) {
            $model->iotAuthType = $map['IotAuthType'];
        }
        if (isset($map['IotDataDigest'])) {
            $model->iotDataDigest = $map['IotDataDigest'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotIdServiceProvider'])) {
            $model->iotIdServiceProvider = $map['IotIdServiceProvider'];
        }
        if (isset($map['IotIdSource'])) {
            $model->iotIdSource = $map['IotIdSource'];
        }
        if (isset($map['IotSignature'])) {
            $model->iotSignature = $map['IotSignature'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
