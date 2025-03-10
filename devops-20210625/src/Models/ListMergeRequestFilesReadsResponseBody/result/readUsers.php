<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponseBody\result;

use AlibabaCloud\Dara\Model;

class readUsers extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;
    /**
     * @var string
     */
    public $avatarUrl;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'aliyunPk'  => 'aliyunPk',
        'avatarUrl' => 'avatarUrl',
        'email'     => 'email',
        'name'      => 'name',
        'state'     => 'state',
        'username'  => 'username',
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

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
