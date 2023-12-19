<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class SignRequest extends Model
{
    /**
     * @example ccaf0c629c2be1e2abb63bb76b
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @example RAW
     *
     * @var string
     */
    public $messageType;

    /**
     * @example SHA256withRSA
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SignRequest
     */
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
