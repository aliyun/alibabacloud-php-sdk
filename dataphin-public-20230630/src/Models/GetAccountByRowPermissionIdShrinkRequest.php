<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetAccountByRowPermissionIdShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $getAccountByRowPermissionIdQueryShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'getAccountByRowPermissionIdQueryShrink' => 'GetAccountByRowPermissionIdQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->getAccountByRowPermissionIdQueryShrink) {
            $res['GetAccountByRowPermissionIdQuery'] = $this->getAccountByRowPermissionIdQueryShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountByRowPermissionIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GetAccountByRowPermissionIdQuery'])) {
            $model->getAccountByRowPermissionIdQueryShrink = $map['GetAccountByRowPermissionIdQuery'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
