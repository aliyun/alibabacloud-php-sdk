<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponseBody;

use AlibabaCloud\Tea\Model;

class sshKey extends Model
{
    /**
     * @description 企业公钥
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description 企业公钥id
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'publicKey' => 'publicKey',
        'id'        => 'id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicKey) {
            $res['publicKey'] = $this->publicKey;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['publicKey'])) {
            $model->publicKey = $map['publicKey'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
