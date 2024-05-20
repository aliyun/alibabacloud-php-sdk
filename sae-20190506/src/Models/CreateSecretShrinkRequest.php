<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $secretDataShrink;

    /**
     * @description This parameter is required.
     *
     * @example registry-auth-acree
     *
     * @var string
     */
    public $secretName;

    /**
     * @description This parameter is required.
     *
     * @example kubernetes.io/dockerconfigjson
     *
     * @var string
     */
    public $secretType;
    protected $_name = [
        'namespaceId'      => 'NamespaceId',
        'secretDataShrink' => 'SecretData',
        'secretName'       => 'SecretName',
        'secretType'       => 'SecretType',
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
        if (null !== $this->secretDataShrink) {
            $res['SecretData'] = $this->secretDataShrink;
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
     * @return CreateSecretShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['SecretData'])) {
            $model->secretDataShrink = $map['SecretData'];
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
