<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ListRowPermissionByUserIdShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $listRowPermissionByUserIdQueryShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'listRowPermissionByUserIdQueryShrink' => 'ListRowPermissionByUserIdQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->listRowPermissionByUserIdQueryShrink) {
            $res['ListRowPermissionByUserIdQuery'] = $this->listRowPermissionByUserIdQueryShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRowPermissionByUserIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListRowPermissionByUserIdQuery'])) {
            $model->listRowPermissionByUserIdQueryShrink = $map['ListRowPermissionByUserIdQuery'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
