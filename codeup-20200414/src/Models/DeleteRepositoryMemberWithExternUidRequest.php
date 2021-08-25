<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class DeleteRepositoryMemberWithExternUidRequest extends Model
{
    /**
     * @description 个人访问令牌。 使用阿里云AK+SK或使用STS临时授权方式不需要传该字段
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 企业标识，也称企业id，字符串形式，可在云效访问链接中获取，如 https://devops.aliyun.com/organization/
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 云效用户ID
     *
     * @var string
     */
    public $externUserId;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'organizationId' => 'OrganizationId',
        'externUserId'   => 'ExternUserId',
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
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->externUserId) {
            $res['ExternUserId'] = $this->externUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRepositoryMemberWithExternUidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['ExternUserId'])) {
            $model->externUserId = $map['ExternUserId'];
        }

        return $model;
    }
}
