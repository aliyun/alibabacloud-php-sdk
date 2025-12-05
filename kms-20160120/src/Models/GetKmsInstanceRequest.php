<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetKmsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
