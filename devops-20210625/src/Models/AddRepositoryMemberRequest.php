<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class AddRepositoryMemberRequest extends Model
{
    /**
     * @description Codeup访问令牌，使用AK/SK方式访问可以不用填AccessToken
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 成员权限
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @description 需要添加为代码库成员的用户阿里云ID。支持多个，以","分割
     *
     * @var string
     */
    public $aliyunPks;

    /**
     * @description 企业ID
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'accessLevel'    => 'accessLevel',
        'aliyunPks'      => 'aliyunPks',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->aliyunPks) {
            $res['aliyunPks'] = $this->aliyunPks;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRepositoryMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['aliyunPks'])) {
            $model->aliyunPks = $map['aliyunPks'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
