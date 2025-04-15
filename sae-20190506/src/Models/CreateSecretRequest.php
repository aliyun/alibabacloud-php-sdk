<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretRequest\secretData;

class CreateSecretRequest extends Model
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
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $secretType;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'secretData' => 'SecretData',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
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

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
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

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        return $model;
    }
}
