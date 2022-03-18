<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetProjectMemberRequest extends Model
{
    /**
     * @description accessToken（选填），使用AK方式调用时无需填accessToken
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 企业ID
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 代码仓库Id
     *
     * @var int
     */
    public $repositoryId;

    /**
     * @description 用户阿里云PK
     *
     * @var string
     */
    public $userAliyunPk;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'organizationId' => 'OrganizationId',
        'repositoryId'   => 'repositoryId',
        'userAliyunPk'   => 'userAliyunPk',
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
        if (null !== $this->repositoryId) {
            $res['repositoryId'] = $this->repositoryId;
        }
        if (null !== $this->userAliyunPk) {
            $res['userAliyunPk'] = $this->userAliyunPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectMemberRequest
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
        if (isset($map['repositoryId'])) {
            $model->repositoryId = $map['repositoryId'];
        }
        if (isset($map['userAliyunPk'])) {
            $model->userAliyunPk = $map['userAliyunPk'];
        }

        return $model;
    }
}
