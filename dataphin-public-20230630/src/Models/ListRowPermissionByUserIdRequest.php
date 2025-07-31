<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdRequest\listRowPermissionByUserIdQuery;
use AlibabaCloud\Tea\Model;

class ListRowPermissionByUserIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var listRowPermissionByUserIdQuery
     */
    public $listRowPermissionByUserIdQuery;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'listRowPermissionByUserIdQuery' => 'ListRowPermissionByUserIdQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->listRowPermissionByUserIdQuery) {
            $res['ListRowPermissionByUserIdQuery'] = null !== $this->listRowPermissionByUserIdQuery ? $this->listRowPermissionByUserIdQuery->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRowPermissionByUserIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListRowPermissionByUserIdQuery'])) {
            $model->listRowPermissionByUserIdQuery = listRowPermissionByUserIdQuery::fromMap($map['ListRowPermissionByUserIdQuery']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
