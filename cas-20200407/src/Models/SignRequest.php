<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class SignRequest extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $messageType;
    /**
     * @var string
     */
    public $signingAlgorithm;
    protected $_name = [
        'certIdentifier'   => 'CertIdentifier',
        'message'          => 'Message',
        'messageType'      => 'MessageType',
        'signingAlgorithm' => 'SigningAlgorithm',
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

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->signingAlgorithm) {
            $res['SigningAlgorithm'] = $this->signingAlgorithm;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['SigningAlgorithm'])) {
            $model->signingAlgorithm = $map['SigningAlgorithm'];
        }

        return $model;
    }
}
