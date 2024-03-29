<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class EncryptRequest extends Model
{
    /**
     * @example RSAESOAEPSHA_1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @example RAW
     *
     * @var string
     */
    public $messageType;

    /**
     * @example 1234***
     *
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'certIdentifier' => 'CertIdentifier',
        'messageType'    => 'MessageType',
        'plaintext'      => 'Plaintext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}
