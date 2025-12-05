<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class UpdateKmsInstanceBindVpcRequest extends Model
{
    /**
     * @var string
     */
    public $bindVpcs;

    /**
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'bindVpcs' => 'BindVpcs',
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = $this->bindVpcs;
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
        if (isset($map['BindVpcs'])) {
            $model->bindVpcs = $map['BindVpcs'];
        }

        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
