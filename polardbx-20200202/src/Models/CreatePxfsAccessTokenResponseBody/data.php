<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePxfsAccessTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'expiresAt' => 'ExpiresAt',
        'identityName' => 'IdentityName',
        'label' => 'Label',
        'port' => 'Port',
        'tenantId' => 'TenantId',
        'token' => 'Token',
        'tokenId' => 'TokenId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
