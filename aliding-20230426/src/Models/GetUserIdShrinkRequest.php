<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description unionId
     *
     * @example ****iE
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'unionId' => 'UnionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
