<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DeleteGatewaySecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SecretDeleteRecordValue[]
     */
    public $secretDeleteRecord;
    protected $_name = [
        'requestId' => 'RequestId',
        'secretDeleteRecord' => 'SecretDeleteRecord',
    ];

    public function validate()
    {
        if (\is_array($this->secretDeleteRecord)) {
            Model::validateArray($this->secretDeleteRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secretDeleteRecord) {
            if (\is_array($this->secretDeleteRecord)) {
                $res['SecretDeleteRecord'] = [];
                foreach ($this->secretDeleteRecord as $key1 => $value1) {
                    $res['SecretDeleteRecord'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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

        if (isset($map['SecretDeleteRecord'])) {
            if (!empty($map['SecretDeleteRecord'])) {
                $model->secretDeleteRecord = [];
                foreach ($map['SecretDeleteRecord'] as $key1 => $value1) {
                    $model->secretDeleteRecord[$key1] = SecretDeleteRecordValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
