<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class TriggerRepositoryMirrorSyncRequest extends Model
{
    /**
     * @description 个人访问令牌。 使用阿里云AK+SK或使用STS临时授权方式不需要传该字段
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 远程同步库克隆账号
     *
     * @var string
     */
    public $account;

    /**
     * @description 企业标识，也称企业id，字符串形式，可在云效访问链接中获取，如 https://devops.aliyun.com/organization/
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 远程同步库克隆令牌
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'account'        => 'account',
        'organizationId' => 'organizationId',
        'token'          => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerRepositoryMirrorSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
