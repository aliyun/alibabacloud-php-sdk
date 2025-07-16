<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetMultiDimTableAllSheetsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 144972
     *
     * @var string
     */
    public $baseId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'baseId' => 'BaseId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiDimTableAllSheetsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
