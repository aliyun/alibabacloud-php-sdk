<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListClientKeysResponseBody;

use AlibabaCloud\Dara\Model;

class clientKeys extends Model
{
    /**
     * @var string
     */
    public $aapName;

    /**
     * @var string
     */
    public $clientKeyId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @var string
     */
    public $keyOrigin;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $publicKeyData;
    protected $_name = [
        'aapName' => 'AapName',
        'clientKeyId' => 'ClientKeyId',
        'createTime' => 'CreateTime',
        'keyAlgorithm' => 'KeyAlgorithm',
        'keyOrigin' => 'KeyOrigin',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'publicKeyData' => 'PublicKeyData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aapName) {
            $res['AapName'] = $this->aapName;
        }

        if (null !== $this->clientKeyId) {
            $res['ClientKeyId'] = $this->clientKeyId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->keyAlgorithm) {
            $res['KeyAlgorithm'] = $this->keyAlgorithm;
        }

        if (null !== $this->keyOrigin) {
            $res['KeyOrigin'] = $this->keyOrigin;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->publicKeyData) {
            $res['PublicKeyData'] = $this->publicKeyData;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AapName'])) {
            $model->aapName = $map['AapName'];
        }

        if (isset($map['ClientKeyId'])) {
            $model->clientKeyId = $map['ClientKeyId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['KeyAlgorithm'])) {
            $model->keyAlgorithm = $map['KeyAlgorithm'];
        }

        if (isset($map['KeyOrigin'])) {
            $model->keyOrigin = $map['KeyOrigin'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['PublicKeyData'])) {
            $model->publicKeyData = $map['PublicKeyData'];
        }

        return $model;
    }
}
