<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretRequest\secretData;
use AlibabaCloud\Tea\Model;

class UpdateSecretRequest extends Model
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
     * @var secretData
     */
    public $secretData;

    /**
     * @description This parameter is required.
     *
     * @example 16
     *
     * @var int
     */
    public $secretId;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'secretData'  => 'SecretData',
        'secretId'    => 'SecretId',
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
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretRequest
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
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        return $model;
    }
}
