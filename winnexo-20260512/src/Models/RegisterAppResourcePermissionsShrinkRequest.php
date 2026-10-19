<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RegisterAppResourcePermissionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $itemsShrink;

    /**
     * @var string
     */
    public $resourceTenantId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'itemsShrink' => 'items',
        'resourceTenantId' => 'resourceTenantId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemsShrink) {
            $res['items'] = $this->itemsShrink;
        }

        if (null !== $this->resourceTenantId) {
            $res['resourceTenantId'] = $this->resourceTenantId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['items'])) {
            $model->itemsShrink = $map['items'];
        }

        if (isset($map['resourceTenantId'])) {
            $model->resourceTenantId = $map['resourceTenantId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
