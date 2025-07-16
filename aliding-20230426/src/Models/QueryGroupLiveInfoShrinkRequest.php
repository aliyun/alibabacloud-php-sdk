<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryGroupLiveInfoShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 333d
     *
     * @var string
     */
    public $anchorUnionId;

    /**
     * @description This parameter is required.
     *
     * @example 4d38xxxxx
     *
     * @var string
     */
    public $liveUuid;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'anchorUnionId' => 'AnchorUnionId',
        'liveUuid' => 'LiveUuid',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorUnionId) {
            $res['AnchorUnionId'] = $this->anchorUnionId;
        }
        if (null !== $this->liveUuid) {
            $res['LiveUuid'] = $this->liveUuid;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGroupLiveInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorUnionId'])) {
            $model->anchorUnionId = $map['AnchorUnionId'];
        }
        if (isset($map['LiveUuid'])) {
            $model->liveUuid = $map['LiveUuid'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
