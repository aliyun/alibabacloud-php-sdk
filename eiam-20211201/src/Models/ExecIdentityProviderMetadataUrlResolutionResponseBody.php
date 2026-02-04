<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody\identityProviderMetadata;

class ExecIdentityProviderMetadataUrlResolutionResponseBody extends Model
{
    /**
     * @var identityProviderMetadata
     */
    public $identityProviderMetadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identityProviderMetadata' => 'IdentityProviderMetadata',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->identityProviderMetadata) {
            $this->identityProviderMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderMetadata) {
            $res['IdentityProviderMetadata'] = null !== $this->identityProviderMetadata ? $this->identityProviderMetadata->toArray($noStream) : $this->identityProviderMetadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IdentityProviderMetadata'])) {
            $model->identityProviderMetadata = identityProviderMetadata::fromMap($map['IdentityProviderMetadata']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
