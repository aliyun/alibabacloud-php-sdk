<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class DeleteDentryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var bool
     */
    public $toRecycleBin;
    protected $_name = [
        'dentryId' => 'DentryId',
        'spaceId' => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
        'toRecycleBin' => 'ToRecycleBin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->toRecycleBin) {
            $res['ToRecycleBin'] = $this->toRecycleBin;
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

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['ToRecycleBin'])) {
            $model->toRecycleBin = $map['ToRecycleBin'];
        }

        return $model;
    }
}
