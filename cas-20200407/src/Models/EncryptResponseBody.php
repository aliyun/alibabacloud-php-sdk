<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class EncryptResponseBody extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;
    /**
     * @var string
     */
    public $ciphertextBlob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'ciphertextBlob' => 'CiphertextBlob',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
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
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
