<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CopyDentryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example b9XJljElJv6RPGyA
     *
     * @var string
     */
    public $dentryId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 24458420428
     *
     * @var string
     */
    public $spaceId;

    /**
     * @description This parameter is required.
     *
     * @example b9XJljElJv6RPG
     *
     * @var string
     */
    public $targetSpaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example b9XJljElJv6RPGyA2
     *
     * @var string
     */
    public $toNextDentryId;

    /**
     * @example b9XJljElJv6RPGyA4
     *
     * @var string
     */
    public $toParentDentryId;

    /**
     * @example b9XJljElJv6RPGyA3
     *
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

    public function validate() {}

    public function toMap()
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CopyDentryRequest
     */
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
