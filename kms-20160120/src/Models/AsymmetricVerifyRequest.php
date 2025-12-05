<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class AsymmetricVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $dryRun;

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
    public $value;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'digest' => 'Digest',
        'dryRun' => 'DryRun',
        'keyId' => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
