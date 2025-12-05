<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetParametersForImportRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $wrappingAlgorithm;

    /**
     * @var string
     */
    public $wrappingKeySpec;
    protected $_name = [
        'keyId' => 'KeyId',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
        'wrappingKeySpec' => 'WrappingKeySpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->wrappingAlgorithm) {
            $res['WrappingAlgorithm'] = $this->wrappingAlgorithm;
        }

        if (null !== $this->wrappingKeySpec) {
            $res['WrappingKeySpec'] = $this->wrappingKeySpec;
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['WrappingAlgorithm'])) {
            $model->wrappingAlgorithm = $map['WrappingAlgorithm'];
        }

        if (isset($map['WrappingKeySpec'])) {
            $model->wrappingKeySpec = $map['WrappingKeySpec'];
        }

        return $model;
    }
}
