<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewaySecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SecretCreateRecordValue[]
     */
    public $secretCreateRecord;
    protected $_name = [
        'requestId' => 'RequestId',
        'secretCreateRecord' => 'SecretCreateRecord',
    ];

    public function validate()
    {
        if (\is_array($this->secretCreateRecord)) {
            Model::validateArray($this->secretCreateRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secretCreateRecord) {
            if (\is_array($this->secretCreateRecord)) {
                $res['SecretCreateRecord'] = [];
                foreach ($this->secretCreateRecord as $key1 => $value1) {
                    $res['SecretCreateRecord'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecretCreateRecord'])) {
            if (!empty($map['SecretCreateRecord'])) {
                $model->secretCreateRecord = [];
                foreach ($map['SecretCreateRecord'] as $key1 => $value1) {
                    $model->secretCreateRecord[$key1] = SecretCreateRecordValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
