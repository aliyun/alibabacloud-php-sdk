<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponseBody;

use AlibabaCloud\Dara\Model;

class sshKey extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $publicKey;
    protected $_name = [
        'id' => 'id',
        'publicKey' => 'publicKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->publicKey) {
            $res['publicKey'] = $this->publicKey;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['publicKey'])) {
            $model->publicKey = $map['publicKey'];
        }

        return $model;
    }
}
