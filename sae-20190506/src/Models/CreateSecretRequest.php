<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretRequest\secretData;
use AlibabaCloud\Tea\Model;

class CreateSecretRequest extends Model
{
    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var secretData
     */
    public $secretData;

    /**
     * @example registry-auth-acree
     *
     * @var string
     */
    public $secretName;

    /**
     * @example kubernetes.io/dockerconfigjson
     *
     * @var string
     */
    public $secretType;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'secretData'  => 'SecretData',
        'secretName'  => 'SecretName',
        'secretType'  => 'SecretType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->secretData) {
            $res['SecretData'] = null !== $this->secretData ? $this->secretData->toMap() : null;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['SecretData'])) {
            $model->secretData = secretData::fromMap($map['SecretData']);
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        return $model;
    }
}
