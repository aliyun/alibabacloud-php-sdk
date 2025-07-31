<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ListRowPermissionShrinkRequest extends Model
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
     * @var string
     */
    public $pageRowPermissionQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageRowPermissionQueryShrink' => 'PageRowPermissionQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->pageRowPermissionQueryShrink) {
            $res['PageRowPermissionQuery'] = $this->pageRowPermissionQueryShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRowPermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['PageRowPermissionQuery'])) {
            $model->pageRowPermissionQueryShrink = $map['PageRowPermissionQuery'];
        }

        return $model;
    }
}
