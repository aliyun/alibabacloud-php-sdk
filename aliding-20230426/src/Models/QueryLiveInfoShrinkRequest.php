<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryLiveInfoShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4d38xxxxx
     *
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'liveId' => 'LiveId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLiveInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
