<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody\kmsInstances;

use AlibabaCloud\Dara\Model;

class kmsInstance extends Model
{
    /**
     * @var string
     */
    public $kmsInstanceArn;

    /**
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'kmsInstanceArn' => 'KmsInstanceArn',
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsInstanceArn) {
            $res['KmsInstanceArn'] = $this->kmsInstanceArn;
        }

        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
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
        if (isset($map['KmsInstanceArn'])) {
            $model->kmsInstanceArn = $map['KmsInstanceArn'];
        }

        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
