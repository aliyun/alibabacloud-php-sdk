<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CopyDentryByNodeIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $toNextNodeId;

    /**
     * @var string
     */
    public $toParentNodeId;

    /**
     * @var string
     */
    public $toPrevNodeId;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'name' => 'Name',
        'tenantContextShrink' => 'TenantContext',
        'toNextNodeId' => 'ToNextNodeId',
        'toParentNodeId' => 'ToParentNodeId',
        'toPrevNodeId' => 'ToPrevNodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->toNextNodeId) {
            $res['ToNextNodeId'] = $this->toNextNodeId;
        }

        if (null !== $this->toParentNodeId) {
            $res['ToParentNodeId'] = $this->toParentNodeId;
        }

        if (null !== $this->toPrevNodeId) {
            $res['ToPrevNodeId'] = $this->toPrevNodeId;
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
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['ToNextNodeId'])) {
            $model->toNextNodeId = $map['ToNextNodeId'];
        }

        if (isset($map['ToParentNodeId'])) {
            $model->toParentNodeId = $map['ToParentNodeId'];
        }

        if (isset($map['ToPrevNodeId'])) {
            $model->toPrevNodeId = $map['ToPrevNodeId'];
        }

        return $model;
    }
}
