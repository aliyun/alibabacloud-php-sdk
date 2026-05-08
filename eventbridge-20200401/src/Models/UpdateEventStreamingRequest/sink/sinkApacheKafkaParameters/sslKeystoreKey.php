<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkApacheKafkaParameters;

use AlibabaCloud\Dara\Model;

class sslKeystoreKey extends Model
{
    /**
     * @var string
     */
    public $kmsArn;

    /**
     * @var string
     */
    public $kmsSecretValueKey;
    protected $_name = [
        'kmsArn' => 'KmsArn',
        'kmsSecretValueKey' => 'KmsSecretValueKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsArn) {
            $res['KmsArn'] = $this->kmsArn;
        }

        if (null !== $this->kmsSecretValueKey) {
            $res['KmsSecretValueKey'] = $this->kmsSecretValueKey;
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
        if (isset($map['KmsArn'])) {
            $model->kmsArn = $map['KmsArn'];
        }

        if (isset($map['KmsSecretValueKey'])) {
            $model->kmsSecretValueKey = $map['KmsSecretValueKey'];
        }

        return $model;
    }
}
