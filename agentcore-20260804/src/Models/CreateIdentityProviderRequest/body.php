<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderRequest\body\metadata;

class body extends Model
{
    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var bool
     */
    public $syncEnabled;
    protected $_name = [
        'identityProviderType' => 'identityProviderType',
        'loginEnabled' => 'loginEnabled',
        'metadata' => 'metadata',
        'syncEnabled' => 'syncEnabled',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderType) {
            $res['identityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->loginEnabled) {
            $res['loginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
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
        if (isset($map['identityProviderType'])) {
            $model->identityProviderType = $map['identityProviderType'];
        }

        if (isset($map['loginEnabled'])) {
            $model->loginEnabled = $map['loginEnabled'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        return $model;
    }
}
