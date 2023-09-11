<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetClientKeyResponseBody extends Model
{
    /**
     * @example aap_test
     *
     * @var string
     */
    public $aapName;

    /**
     * @example KAAP.66abf237-63f6-4625-b8cf-47e1086e****
     *
     * @var string
     */
    public $clientKeyId;

    /**
     * @example 2023-08-31T09:14:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example RSA_2048
     *
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @example KMS_PROVIDED
     *
     * @var string
     */
    public $keyOrigin;

    /**
     * @example 2028-08-31T17:14:33Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @example 2023-08-31T17:14:33Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @example -----BEGIN CERTIFICATE-----\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----
     *
     * @var string
     */
    public $publicKeyData;

    /**
     * @example 63d849a6-045b-4a57-ad9f-c5f756cea9e9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aapName'       => 'AapName',
        'clientKeyId'   => 'ClientKeyId',
        'createTime'    => 'CreateTime',
        'keyAlgorithm'  => 'KeyAlgorithm',
        'keyOrigin'     => 'KeyOrigin',
        'notAfter'      => 'NotAfter',
        'notBefore'     => 'NotBefore',
        'publicKeyData' => 'PublicKeyData',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientKeyResponseBody
     */
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
