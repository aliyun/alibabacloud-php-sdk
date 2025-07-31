<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdRequest\getAccountByRowPermissionIdQuery;
use AlibabaCloud\Tea\Model;

class GetAccountByRowPermissionIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var getAccountByRowPermissionIdQuery
     */
    public $getAccountByRowPermissionIdQuery;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'getAccountByRowPermissionIdQuery' => 'GetAccountByRowPermissionIdQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->getAccountByRowPermissionIdQuery) {
            $res['GetAccountByRowPermissionIdQuery'] = null !== $this->getAccountByRowPermissionIdQuery ? $this->getAccountByRowPermissionIdQuery->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountByRowPermissionIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GetAccountByRowPermissionIdQuery'])) {
            $model->getAccountByRowPermissionIdQuery = getAccountByRowPermissionIdQuery::fromMap($map['GetAccountByRowPermissionIdQuery']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
