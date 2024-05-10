<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RecallHonorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 21660610
     *
     * @var string
     */
    public $honorId;

    /**
     * @description This parameter is required.
     *
     * @example 345391052
     *
     * @var int
     */
    public $orgId;

    /**
     * @description This parameter is required.
     *
     * @example 363784
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'honorId'             => 'honorId',
        'orgId'               => 'orgId',
        'userId'              => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->honorId) {
            $res['honorId'] = $this->honorId;
        }
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecallHonorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['honorId'])) {
            $model->honorId = $map['honorId'];
        }
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
