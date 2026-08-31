<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdRequest\listRowPermissionByUserIdQuery;

class ListRowPermissionByUserIdRequest extends Model
{
    /**
     * @var listRowPermissionByUserIdQuery
     */
    public $listRowPermissionByUserIdQuery;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'listRowPermissionByUserIdQuery' => 'ListRowPermissionByUserIdQuery',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (null !== $this->listRowPermissionByUserIdQuery) {
            $this->listRowPermissionByUserIdQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listRowPermissionByUserIdQuery) {
            $res['ListRowPermissionByUserIdQuery'] = null !== $this->listRowPermissionByUserIdQuery ? $this->listRowPermissionByUserIdQuery->toArray($noStream) : $this->listRowPermissionByUserIdQuery;
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
        if (isset($map['ListRowPermissionByUserIdQuery'])) {
            $model->listRowPermissionByUserIdQuery = listRowPermissionByUserIdQuery::fromMap($map['ListRowPermissionByUserIdQuery']);
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
