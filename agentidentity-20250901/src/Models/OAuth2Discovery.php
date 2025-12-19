<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class OAuth2Discovery extends Model
{
    /**
     * @var AuthorizationServerMetadata
     */
    public $authorizationServerMetadata;

    /**
     * @var string
     */
    public $discoveryURL;
    protected $_name = [
        'authorizationServerMetadata' => 'AuthorizationServerMetadata',
        'discoveryURL' => 'DiscoveryURL',
    ];

    public function validate()
    {
        if (null !== $this->authorizationServerMetadata) {
            $this->authorizationServerMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationServerMetadata) {
            $res['AuthorizationServerMetadata'] = null !== $this->authorizationServerMetadata ? $this->authorizationServerMetadata->toArray($noStream) : $this->authorizationServerMetadata;
        }

        if (null !== $this->discoveryURL) {
            $res['DiscoveryURL'] = $this->discoveryURL;
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
        if (isset($map['AuthorizationServerMetadata'])) {
            $model->authorizationServerMetadata = AuthorizationServerMetadata::fromMap($map['AuthorizationServerMetadata']);
        }

        if (isset($map['DiscoveryURL'])) {
            $model->discoveryURL = $map['DiscoveryURL'];
        }

        return $model;
    }
}
