<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class TriggerRepositoryMirrorSyncRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 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
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
