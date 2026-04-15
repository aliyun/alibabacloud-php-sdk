<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Dara\Model;

class endpointMetadata extends Model
{
    /**
     * @var string
     */
    public $samlAcsEndpoint;

    /**
     * @var string
     */
    public $samlEntityId;

    /**
     * @var string
     */
    public $samlMetaEndpoint;
    protected $_name = [
        'samlAcsEndpoint' => 'SamlAcsEndpoint',
        'samlEntityId' => 'SamlEntityId',
        'samlMetaEndpoint' => 'SamlMetaEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->samlAcsEndpoint) {
            $res['SamlAcsEndpoint'] = $this->samlAcsEndpoint;
        }

        if (null !== $this->samlEntityId) {
            $res['SamlEntityId'] = $this->samlEntityId;
        }

        if (null !== $this->samlMetaEndpoint) {
            $res['SamlMetaEndpoint'] = $this->samlMetaEndpoint;
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
        if (isset($map['SamlAcsEndpoint'])) {
            $model->samlAcsEndpoint = $map['SamlAcsEndpoint'];
        }

        if (isset($map['SamlEntityId'])) {
            $model->samlEntityId = $map['SamlEntityId'];
        }

        if (isset($map['SamlMetaEndpoint'])) {
            $model->samlMetaEndpoint = $map['SamlMetaEndpoint'];
        }

        return $model;
    }
}
