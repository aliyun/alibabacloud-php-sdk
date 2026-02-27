<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetRowPermissionByTableGuidsRequest\getRowPermissionByTableGuidsQuery;

class GetRowPermissionByTableGuidsRequest extends Model
{
    /**
     * @var getRowPermissionByTableGuidsQuery
     */
    public $getRowPermissionByTableGuidsQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'getRowPermissionByTableGuidsQuery' => 'GetRowPermissionByTableGuidsQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->getRowPermissionByTableGuidsQuery) {
            $this->getRowPermissionByTableGuidsQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->getRowPermissionByTableGuidsQuery) {
            $res['GetRowPermissionByTableGuidsQuery'] = null !== $this->getRowPermissionByTableGuidsQuery ? $this->getRowPermissionByTableGuidsQuery->toArray($noStream) : $this->getRowPermissionByTableGuidsQuery;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['GetRowPermissionByTableGuidsQuery'])) {
            $model->getRowPermissionByTableGuidsQuery = getRowPermissionByTableGuidsQuery::fromMap($map['GetRowPermissionByTableGuidsQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
