<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenShrinkRequest extends Model
{
    /**
     * @description access token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 链式授权
     *
     * @var string
     */
    public $assumeRoleChainShrink;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description refresh token
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'accessToken'           => 'AccessToken',
        'assumeRoleChainShrink' => 'AssumeRoleChain',
        'projectName'           => 'ProjectName',
        'refreshToken'          => 'RefreshToken',
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
        if (null !== $this->assumeRoleChainShrink) {
            $res['AssumeRoleChain'] = $this->assumeRoleChainShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshWebofficeTokenShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AssumeRoleChain'])) {
            $model->assumeRoleChainShrink = $map['AssumeRoleChain'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }

        return $model;
    }
}
