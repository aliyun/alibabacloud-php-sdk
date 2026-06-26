<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSpecificIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;

class specificIdentityProviderConfiguration extends Model
{
    /**
     * @var string
     */
    public $IDPMetadata;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $SSOStatus;
    protected $_name = [
        'IDPMetadata' => 'IDPMetadata',
        'identityProviderType' => 'IdentityProviderType',
        'SSOStatus' => 'SSOStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IDPMetadata) {
            $res['IDPMetadata'] = $this->IDPMetadata;
        }

        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->SSOStatus) {
            $res['SSOStatus'] = $this->SSOStatus;
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
        if (isset($map['IDPMetadata'])) {
            $model->IDPMetadata = $map['IDPMetadata'];
        }

        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['SSOStatus'])) {
            $model->SSOStatus = $map['SSOStatus'];
        }

        return $model;
    }
}
