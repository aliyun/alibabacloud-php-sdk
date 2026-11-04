<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GenerateDataKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var string
     */
    public $ciphertextForRecipient;

    /**
     * @var string
     */
    public $dataKeyName;

    /**
     * @var string
     */
    public $dataKeyVersionId;

    /**
     * @var string
     */
    public $dataKeyVersionName;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyVersionId;

    /**
     * @var string
     */
    public $plaintext;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'ciphertextForRecipient' => 'CiphertextForRecipient',
        'dataKeyName' => 'DataKeyName',
        'dataKeyVersionId' => 'DataKeyVersionId',
        'dataKeyVersionName' => 'DataKeyVersionName',
        'keyId' => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'plaintext' => 'Plaintext',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }

        if (null !== $this->ciphertextForRecipient) {
            $res['CiphertextForRecipient'] = $this->ciphertextForRecipient;
        }

        if (null !== $this->dataKeyName) {
            $res['DataKeyName'] = $this->dataKeyName;
        }

        if (null !== $this->dataKeyVersionId) {
            $res['DataKeyVersionId'] = $this->dataKeyVersionId;
        }

        if (null !== $this->dataKeyVersionName) {
            $res['DataKeyVersionName'] = $this->dataKeyVersionName;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }

        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }

        if (isset($map['CiphertextForRecipient'])) {
            $model->ciphertextForRecipient = $map['CiphertextForRecipient'];
        }

        if (isset($map['DataKeyName'])) {
            $model->dataKeyName = $map['DataKeyName'];
        }

        if (isset($map['DataKeyVersionId'])) {
            $model->dataKeyVersionId = $map['DataKeyVersionId'];
        }

        if (isset($map['DataKeyVersionName'])) {
            $model->dataKeyVersionName = $map['DataKeyVersionName'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }

        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
