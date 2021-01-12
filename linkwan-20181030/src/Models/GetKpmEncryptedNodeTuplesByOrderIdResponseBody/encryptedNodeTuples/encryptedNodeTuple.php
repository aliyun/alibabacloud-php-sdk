<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdResponseBody\encryptedNodeTuples;

use AlibabaCloud\Tea\Model;

class encryptedNodeTuple extends Model
{
    /**
     * @var string
     */
    public $appKeyKcv;

    /**
     * @var string
     */
    public $devEui;

    /**
     * @var string
     */
    public $encryptedNwkKey;

    /**
     * @var string
     */
    public $nwkKeyKcv;

    /**
     * @var string
     */
    public $encryptedGenAppKey;

    /**
     * @var string
     */
    public $pinCode;

    /**
     * @var string
     */
    public $genAppKeyKcv;

    /**
     * @var string
     */
    public $loraVersion;

    /**
     * @var string
     */
    public $encryptedAppKey;
    protected $_name = [
        'appKeyKcv'          => 'AppKeyKcv',
        'devEui'             => 'DevEui',
        'encryptedNwkKey'    => 'EncryptedNwkKey',
        'nwkKeyKcv'          => 'NwkKeyKcv',
        'encryptedGenAppKey' => 'EncryptedGenAppKey',
        'pinCode'            => 'PinCode',
        'genAppKeyKcv'       => 'GenAppKeyKcv',
        'loraVersion'        => 'LoraVersion',
        'encryptedAppKey'    => 'EncryptedAppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKeyKcv) {
            $res['AppKeyKcv'] = $this->appKeyKcv;
        }
        if (null !== $this->devEui) {
            $res['DevEui'] = $this->devEui;
        }
        if (null !== $this->encryptedNwkKey) {
            $res['EncryptedNwkKey'] = $this->encryptedNwkKey;
        }
        if (null !== $this->nwkKeyKcv) {
            $res['NwkKeyKcv'] = $this->nwkKeyKcv;
        }
        if (null !== $this->encryptedGenAppKey) {
            $res['EncryptedGenAppKey'] = $this->encryptedGenAppKey;
        }
        if (null !== $this->pinCode) {
            $res['PinCode'] = $this->pinCode;
        }
        if (null !== $this->genAppKeyKcv) {
            $res['GenAppKeyKcv'] = $this->genAppKeyKcv;
        }
        if (null !== $this->loraVersion) {
            $res['LoraVersion'] = $this->loraVersion;
        }
        if (null !== $this->encryptedAppKey) {
            $res['EncryptedAppKey'] = $this->encryptedAppKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryptedNodeTuple
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKeyKcv'])) {
            $model->appKeyKcv = $map['AppKeyKcv'];
        }
        if (isset($map['DevEui'])) {
            $model->devEui = $map['DevEui'];
        }
        if (isset($map['EncryptedNwkKey'])) {
            $model->encryptedNwkKey = $map['EncryptedNwkKey'];
        }
        if (isset($map['NwkKeyKcv'])) {
            $model->nwkKeyKcv = $map['NwkKeyKcv'];
        }
        if (isset($map['EncryptedGenAppKey'])) {
            $model->encryptedGenAppKey = $map['EncryptedGenAppKey'];
        }
        if (isset($map['PinCode'])) {
            $model->pinCode = $map['PinCode'];
        }
        if (isset($map['GenAppKeyKcv'])) {
            $model->genAppKeyKcv = $map['GenAppKeyKcv'];
        }
        if (isset($map['LoraVersion'])) {
            $model->loraVersion = $map['LoraVersion'];
        }
        if (isset($map['EncryptedAppKey'])) {
            $model->encryptedAppKey = $map['EncryptedAppKey'];
        }

        return $model;
    }
}
