<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusResponseBody\result;

use AlibabaCloud\Dara\Model;

class creator extends Model
{
    /**
     * @var int
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $login;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunPk' => 'aliyunPk',
        'avatarUrl' => 'avatarUrl',
        'login' => 'login',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->login) {
            $res['login'] = $this->login;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }

        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }

        if (isset($map['login'])) {
            $model->login = $map['login'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
