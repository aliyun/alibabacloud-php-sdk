<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretRequest\secretData;

class UpdateSecretRequest extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var secretData
     */
    public $secretData;

    /**
     * @var int
     */
    public $secretId;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'secretData' => 'SecretData',
        'secretId' => 'SecretId',
    ];

    public function validate()
    {
        if (null !== $this->secretData) {
            $this->secretData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->secretData) {
            $res['SecretData'] = null !== $this->secretData ? $this->secretData->toArray($noStream) : $this->secretData;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
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
