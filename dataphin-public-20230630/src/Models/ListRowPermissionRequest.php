<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionRequest\pageRowPermissionQuery;

class ListRowPermissionRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var pageRowPermissionQuery
     */
    public $pageRowPermissionQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageRowPermissionQuery' => 'PageRowPermissionQuery',
    ];

    public function validate()
    {
        if (null !== $this->pageRowPermissionQuery) {
            $this->pageRowPermissionQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->pageRowPermissionQuery) {
            $res['PageRowPermissionQuery'] = null !== $this->pageRowPermissionQuery ? $this->pageRowPermissionQuery->toArray($noStream) : $this->pageRowPermissionQuery;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['PageRowPermissionQuery'])) {
            $model->pageRowPermissionQuery = pageRowPermissionQuery::fromMap($map['PageRowPermissionQuery']);
        }

        return $model;
    }
}
