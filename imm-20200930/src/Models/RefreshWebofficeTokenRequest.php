<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenRequest extends Model
{
    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description access token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description refresh token
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description 链式授权
     *
     * @var AssumeRoleChain
     */
    public $assumeRoleChain;
    protected $_name = [
        'projectName'     => 'ProjectName',
        'accessToken'     => 'AccessToken',
        'refreshToken'    => 'RefreshToken',
        'assumeRoleChain' => 'AssumeRoleChain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->assumeRoleChain) {
            $res['AssumeRoleChain'] = null !== $this->assumeRoleChain ? $this->assumeRoleChain->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshWebofficeTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['AssumeRoleChain'])) {
            $model->assumeRoleChain = AssumeRoleChain::fromMap($map['AssumeRoleChain']);
        }

        return $model;
    }
}
