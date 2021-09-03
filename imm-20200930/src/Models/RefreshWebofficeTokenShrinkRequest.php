<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenShrinkRequest extends Model
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
     * @var string
     */
    public $assumeRoleChainShrink;
    protected $_name = [
        'projectName'           => 'ProjectName',
        'accessToken'           => 'AccessToken',
        'refreshToken'          => 'RefreshToken',
        'assumeRoleChainShrink' => 'AssumeRoleChain',
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
        if (null !== $this->assumeRoleChainShrink) {
            $res['AssumeRoleChain'] = $this->assumeRoleChainShrink;
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
            $model->assumeRoleChainShrink = $map['AssumeRoleChain'];
        }

        return $model;
    }
}
