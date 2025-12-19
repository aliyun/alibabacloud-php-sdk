<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreateIdentityProviderRequest extends Model
{
    /**
     * @var string[]
     */
    public $allowedAudience;

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
        'allowedAudience' => 'AllowedAudience',
        'description' => 'Description',
        'discoveryURL' => 'DiscoveryURL',
        'identityProviderName' => 'IdentityProviderName',
    ];

    public function validate()
    {
        if (\is_array($this->allowedAudience)) {
            Model::validateArray($this->allowedAudience);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedAudience) {
            if (\is_array($this->allowedAudience)) {
                $res['AllowedAudience'] = [];
                $n1 = 0;
                foreach ($this->allowedAudience as $item1) {
                    $res['AllowedAudience'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AllowedAudience'])) {
                $model->allowedAudience = [];
                $n1 = 0;
                foreach ($map['AllowedAudience'] as $item1) {
                    $model->allowedAudience[$n1] = $item1;
                    ++$n1;
                }
            }
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
