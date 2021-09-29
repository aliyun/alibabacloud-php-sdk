<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleWithOIDCRequest extends Model
{
    /**
     * @description OIDC Provider的ARN
     *
     * @var string
     */
    public $OIDCProviderArn;

    /**
     * @description 需要扮演的角色的ARN
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description OIDC的ID Token，需输入原始Token，无需Base64解码
     *
     * @var string
     */
    public $OIDCToken;

    /**
     * @description 权限策略。 生成STS Token时可以指定一个额外的权限策略，以进一步限制STS Token的权限。若不指定则返回的Token拥有指定角色的所有权限。
     *
     * @var string
     */
    public $policy;

    /**
     * @description Session过期时间，单位为秒。
     *
     * @var int
     */
    public $durationSeconds;

    /**
     * @description 用户自定义参数。此参数用来区分不同的令牌，可用于用户级别的访问审计。
     *
     * @var string
     */
    public $roleSessionName;
    protected $_name = [
        'OIDCProviderArn' => 'OIDCProviderArn',
        'roleArn'         => 'RoleArn',
        'OIDCToken'       => 'OIDCToken',
        'policy'          => 'Policy',
        'durationSeconds' => 'DurationSeconds',
        'roleSessionName' => 'RoleSessionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OIDCProviderArn) {
            $res['OIDCProviderArn'] = $this->OIDCProviderArn;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->OIDCToken) {
            $res['OIDCToken'] = $this->OIDCToken;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }
        if (null !== $this->roleSessionName) {
            $res['RoleSessionName'] = $this->roleSessionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleWithOIDCRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OIDCProviderArn'])) {
            $model->OIDCProviderArn = $map['OIDCProviderArn'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['OIDCToken'])) {
            $model->OIDCToken = $map['OIDCToken'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }
        if (isset($map['RoleSessionName'])) {
            $model->roleSessionName = $map['RoleSessionName'];
        }

        return $model;
    }
}
