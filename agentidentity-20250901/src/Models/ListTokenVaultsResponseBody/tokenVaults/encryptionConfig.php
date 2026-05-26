<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListTokenVaultsResponseBody\tokenVaults;

use AlibabaCloud\Dara\Model;

class encryptionConfig extends Model
{
    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $kmsKeyArn;
    protected $_name = [
        'keyType' => 'KeyType',
        'kmsKeyArn' => 'KmsKeyArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        if (null !== $this->kmsKeyArn) {
            $res['KmsKeyArn'] = $this->kmsKeyArn;
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
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        if (isset($map['KmsKeyArn'])) {
            $model->kmsKeyArn = $map['KmsKeyArn'];
        }

        return $model;
    }
}
