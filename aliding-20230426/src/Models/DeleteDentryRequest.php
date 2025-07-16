<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDentryRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class DeleteDentryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example b9XJlZ44W3NeDGyA
     *
     * @var string
     */
    public $dentryId;

    /**
     * @description This parameter is required.
     *
     * @example nb9XJx4EPx16QGyA
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var bool
     */
    public $toRecycleBin;
    protected $_name = [
        'dentryId' => 'DentryId',
        'spaceId' => 'SpaceId',
        'tenantContext' => 'TenantContext',
        'toRecycleBin' => 'ToRecycleBin',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->toRecycleBin) {
            $res['ToRecycleBin'] = $this->toRecycleBin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDentryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['ToRecycleBin'])) {
            $model->toRecycleBin = $map['ToRecycleBin'];
        }

        return $model;
    }
}
