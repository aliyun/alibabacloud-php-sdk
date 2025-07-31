<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionRequest\pageRowPermissionQuery;
use AlibabaCloud\Tea\Model;

class ListRowPermissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var pageRowPermissionQuery
     */
    public $pageRowPermissionQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageRowPermissionQuery' => 'PageRowPermissionQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->pageRowPermissionQuery) {
            $res['PageRowPermissionQuery'] = null !== $this->pageRowPermissionQuery ? $this->pageRowPermissionQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRowPermissionRequest
     */
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
