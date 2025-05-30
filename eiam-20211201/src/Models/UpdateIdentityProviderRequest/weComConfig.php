<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class weComConfig extends Model
{
    /**
     * @description 企业微信自建应用的Id
     *
     * @example 1237403
     *
     * @var string
     */
    public $agentId;

    /**
     * @description 授权回调域
     *
     * @example https://xxx.aliyunidaas.com/xxxxx
     *
     * @var string
     */
    public $authorizeCallbackDomain;

    /**
     * @description 企业微信自建应用的corpSecret
     *
     * @example CSEHDddddddxxxxuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $corpSecret;

    /**
     * @description 可信域名
     *
     * @example https://xxx.aliyunidaas.com
     *
     * @var string
     */
    public $trustableDomain;
    protected $_name = [
        'agentId' => 'AgentId',
        'authorizeCallbackDomain' => 'AuthorizeCallbackDomain',
        'corpSecret' => 'CorpSecret',
        'trustableDomain' => 'TrustableDomain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->authorizeCallbackDomain) {
            $res['AuthorizeCallbackDomain'] = $this->authorizeCallbackDomain;
        }
        if (null !== $this->corpSecret) {
            $res['CorpSecret'] = $this->corpSecret;
        }
        if (null !== $this->trustableDomain) {
            $res['TrustableDomain'] = $this->trustableDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weComConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AuthorizeCallbackDomain'])) {
            $model->authorizeCallbackDomain = $map['AuthorizeCallbackDomain'];
        }
        if (isset($map['CorpSecret'])) {
            $model->corpSecret = $map['CorpSecret'];
        }
        if (isset($map['TrustableDomain'])) {
            $model->trustableDomain = $map['TrustableDomain'];
        }

        return $model;
    }
}
