<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreateIdentityProviderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $allowedAudienceShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $discoveryURL;

    /**
     * @var string
     */
    public $identityProviderName;
    protected $_name = [
        'allowedAudienceShrink' => 'AllowedAudience',
        'description' => 'Description',
        'discoveryURL' => 'DiscoveryURL',
        'identityProviderName' => 'IdentityProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedAudienceShrink) {
            $res['AllowedAudience'] = $this->allowedAudienceShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->discoveryURL) {
            $res['DiscoveryURL'] = $this->discoveryURL;
        }

        if (null !== $this->identityProviderName) {
            $res['IdentityProviderName'] = $this->identityProviderName;
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
        if (isset($map['AllowedAudience'])) {
            $model->allowedAudienceShrink = $map['AllowedAudience'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiscoveryURL'])) {
            $model->discoveryURL = $map['DiscoveryURL'];
        }

        if (isset($map['IdentityProviderName'])) {
            $model->identityProviderName = $map['IdentityProviderName'];
        }

        return $model;
    }
}
