<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\BatchGetSecretValueResponseBody\errors;
use AlibabaCloud\SDK\Kms\V20160120\Models\BatchGetSecretValueResponseBody\secretValues;

class BatchGetSecretValueResponseBody extends Model
{
    /**
     * @var errors[]
     */
    public $errors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secretValues[]
     */
    public $secretValues;
    protected $_name = [
        'errors' => 'Errors',
        'requestId' => 'RequestId',
        'secretValues' => 'SecretValues',
    ];

    public function validate()
    {
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        if (\is_array($this->secretValues)) {
            Model::validateArray($this->secretValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['Errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['Errors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secretValues) {
            if (\is_array($this->secretValues)) {
                $res['SecretValues'] = [];
                $n1 = 0;
                foreach ($this->secretValues as $item1) {
                    $res['SecretValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['Errors'] as $item1) {
                    $model->errors[$n1] = errors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecretValues'])) {
            if (!empty($map['SecretValues'])) {
                $model->secretValues = [];
                $n1 = 0;
                foreach ($map['SecretValues'] as $item1) {
                    $model->secretValues[$n1] = secretValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
