<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricEncryptRequest extends Model
{
    /**
     * @var string
     */
    public $plaintext;

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
    public $algorithm;
    protected $_name = [
        'plaintext'    => 'Plaintext',
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'algorithm'    => 'Algorithm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricEncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        return $model;
    }
}
