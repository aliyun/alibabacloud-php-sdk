<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryRequest\tenantContext;

class CopyDentryRequest extends Model
{
    /**
     * @var string
     */
    public $dentryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $targetSpaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $toNextDentryId;

    /**
     * @var string
     */
    public $toParentDentryId;

    /**
     * @var string
     */
    public $toPrevDentryId;
    protected $_name = [
        'dentryId' => 'DentryId',
        'name' => 'Name',
        'spaceId' => 'SpaceId',
        'targetSpaceId' => 'TargetSpaceId',
        'tenantContext' => 'TenantContext',
        'toNextDentryId' => 'ToNextDentryId',
        'toParentDentryId' => 'ToParentDentryId',
        'toPrevDentryId' => 'ToPrevDentryId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->targetSpaceId) {
            $res['TargetSpaceId'] = $this->targetSpaceId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->toNextDentryId) {
            $res['ToNextDentryId'] = $this->toNextDentryId;
        }

        if (null !== $this->toParentDentryId) {
            $res['ToParentDentryId'] = $this->toParentDentryId;
        }

        if (null !== $this->toPrevDentryId) {
            $res['ToPrevDentryId'] = $this->toPrevDentryId;
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
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['TargetSpaceId'])) {
            $model->targetSpaceId = $map['TargetSpaceId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['ToNextDentryId'])) {
            $model->toNextDentryId = $map['ToNextDentryId'];
        }

        if (isset($map['ToParentDentryId'])) {
            $model->toParentDentryId = $map['ToParentDentryId'];
        }

        if (isset($map['ToPrevDentryId'])) {
            $model->toPrevDentryId = $map['ToPrevDentryId'];
        }

        return $model;
    }
}
