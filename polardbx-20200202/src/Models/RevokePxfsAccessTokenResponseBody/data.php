<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\RevokePxfsAccessTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $revoked;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'revoked' => 'Revoked',
        'tenantId' => 'TenantId',
        'tokenId' => 'TokenId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->revoked) {
            $res['Revoked'] = $this->revoked;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Revoked'])) {
            $model->revoked = $map['Revoked'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
