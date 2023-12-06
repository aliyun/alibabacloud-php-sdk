<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusResponseBody\result;

use AlibabaCloud\Tea\Model;

class creator extends Model
{
    /**
     * @example 204485087002425236
     *
     * @var int
     */
    public $aliyunPk;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example codeup
     *
     * @var string
     */
    public $login;

    /**
     * @example User
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunPk'  => 'aliyunPk',
        'avatarUrl' => 'avatarUrl',
        'login'     => 'login',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return creator
     */
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
