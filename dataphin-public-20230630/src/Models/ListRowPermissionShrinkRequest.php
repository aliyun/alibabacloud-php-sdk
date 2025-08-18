<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class ListRowPermissionShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $pageRowPermissionQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageRowPermissionQueryShrink' => 'PageRowPermissionQuery',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $model->pageRowPermissionQueryShrink = $map['PageRowPermissionQuery'];
        }

        return $model;
    }
}
