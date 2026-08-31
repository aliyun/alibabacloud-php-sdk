<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdRequest\getAccountByRowPermissionIdQuery;

class GetAccountByRowPermissionIdRequest extends Model
{
    /**
     * @var getAccountByRowPermissionIdQuery
     */
    public $getAccountByRowPermissionIdQuery;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'getAccountByRowPermissionIdQuery' => 'GetAccountByRowPermissionIdQuery',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (null !== $this->getAccountByRowPermissionIdQuery) {
            $this->getAccountByRowPermissionIdQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->getAccountByRowPermissionIdQuery) {
            $res['GetAccountByRowPermissionIdQuery'] = null !== $this->getAccountByRowPermissionIdQuery ? $this->getAccountByRowPermissionIdQuery->toArray($noStream) : $this->getAccountByRowPermissionIdQuery;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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
        if (isset($map['GetAccountByRowPermissionIdQuery'])) {
            $model->getAccountByRowPermissionIdQuery = getAccountByRowPermissionIdQuery::fromMap($map['GetAccountByRowPermissionIdQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
