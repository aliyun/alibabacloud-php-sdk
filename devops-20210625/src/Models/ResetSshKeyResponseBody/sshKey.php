<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponseBody;

use AlibabaCloud\Tea\Model;

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
        'id'        => 'id',
        'publicKey' => 'publicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sshKey
     */
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
