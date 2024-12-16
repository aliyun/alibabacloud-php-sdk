<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class weComConfig extends Model
{
    /**
     * @description IDaaS EIAM 企业微信自建应用的Id
     *
     * @example 1242350
     *
     * @var string
     */
    public $agentId;

    /**
     * @description 授权回调域
     *
     * @example https://example.com/xxxx
     *
     * @var string
     */
    public $authorizeCallbackDomain;

    /**
     * @description IDaaS EIAM 企业微信自建应用的corpId
     *
     * @example 3562012953454577801
     *
     * @var string
     */
    public $corpId;

    /**
     * @description IDaaS EIAM 企业微信自建应用的corpSecret
     *
     * @example weaseiszjskejskaj12sjeszojxxxx
     *
     * @var string
     */
    public $corpSecret;

    /**
     * @description 可信域名
     *
     * @example https://example.com
     *
     * @var string
     */
    public $trustableDomain;
    protected $_name = [
        'agentId'                 => 'AgentId',
        'authorizeCallbackDomain' => 'AuthorizeCallbackDomain',
        'corpId'                  => 'CorpId',
        'corpSecret'              => 'CorpSecret',
        'trustableDomain'         => 'TrustableDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->authorizeCallbackDomain) {
            $res['AuthorizeCallbackDomain'] = $this->authorizeCallbackDomain;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
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
