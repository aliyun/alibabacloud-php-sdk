<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class ListRowPermissionByUserIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $listRowPermissionByUserIdQueryShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'listRowPermissionByUserIdQueryShrink' => 'ListRowPermissionByUserIdQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
