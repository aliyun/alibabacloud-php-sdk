<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;

class weComConfig extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $authorizeCallbackDomain;

    /**
     * @var string
     */
    public $corpSecret;

    /**
     * @var string
     */
    public $trustableDomain;
    protected $_name = [
        'agentId' => 'AgentId',
        'authorizeCallbackDomain' => 'AuthorizeCallbackDomain',
        'corpSecret' => 'CorpSecret',
        'trustableDomain' => 'TrustableDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
