<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider\credentialProviderConfig;

use AlibabaCloud\Dara\Model;

class OAuthProviderConfig extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tokenEndpoint;
    protected $_name = [
        'clientId' => 'ClientId',
        'scope' => 'Scope',
        'tokenEndpoint' => 'TokenEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->tokenEndpoint) {
            $res['TokenEndpoint'] = $this->tokenEndpoint;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['TokenEndpoint'])) {
            $model->tokenEndpoint = $map['TokenEndpoint'];
        }

        return $model;
    }
}
