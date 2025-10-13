<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class KMSConfig extends Model
{
    /**
     * @var string
     */
    public $kmsInstanceId;

    /**
     * @var string
     */
    public $kmsKeyId;
    protected $_name = [
        'kmsInstanceId' => 'kmsInstanceId',
        'kmsKeyId' => 'kmsKeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsInstanceId) {
            $res['kmsInstanceId'] = $this->kmsInstanceId;
        }

        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
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
        if (isset($map['kmsInstanceId'])) {
            $model->kmsInstanceId = $map['kmsInstanceId'];
        }

        if (isset($map['kmsKeyId'])) {
            $model->kmsKeyId = $map['kmsKeyId'];
        }

        return $model;
    }
}
