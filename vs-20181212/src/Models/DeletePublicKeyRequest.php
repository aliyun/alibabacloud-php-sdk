<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DeletePublicKeyRequest extends Model
{
    /**
     * @var string
     */
    public $keyName;
    protected $_name = [
        'keyName' => 'KeyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
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
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        return $model;
    }
}
