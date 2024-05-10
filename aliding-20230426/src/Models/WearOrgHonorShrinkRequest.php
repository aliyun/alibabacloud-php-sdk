<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class WearOrgHonorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 21659595
     *
     * @var string
     */
    public $honorId;

    /**
     * @description This parameter is required.
     *
     * @example 123456
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

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $wear;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'honorId'             => 'honorId',
        'orgId'               => 'orgId',
        'userId'              => 'userId',
        'wear'                => 'wear',
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
        if (null !== $this->wear) {
            $res['wear'] = $this->wear;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WearOrgHonorShrinkRequest
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
        if (isset($map['wear'])) {
            $model->wear = $map['wear'];
        }

        return $model;
    }
}
