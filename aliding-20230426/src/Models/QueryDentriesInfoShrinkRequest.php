<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryDentriesInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appIdsForAppPropertiesShrink;

    /**
     * @description This parameter is required.
     *
     * @example 140901622636
     *
     * @var string
     */
    public $dentryId;

    /**
     * @description This parameter is required.
     *
     * @example 22443475065
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example urv3ZIAtcmmIgQzHq08YcAiEiE
     *
     * @var string
     */
    public $unionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $withThumbnail;
    protected $_name = [
        'appIdsForAppPropertiesShrink' => 'AppIdsForAppProperties',
        'dentryId' => 'DentryId',
        'spaceId' => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
        'unionId' => 'UnionId',
        'withThumbnail' => 'WithThumbnail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdsForAppPropertiesShrink) {
            $res['AppIdsForAppProperties'] = $this->appIdsForAppPropertiesShrink;
        }
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }
        if (null !== $this->withThumbnail) {
            $res['WithThumbnail'] = $this->withThumbnail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDentriesInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdsForAppProperties'])) {
            $model->appIdsForAppPropertiesShrink = $map['AppIdsForAppProperties'];
        }
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }
        if (isset($map['WithThumbnail'])) {
            $model->withThumbnail = $map['WithThumbnail'];
        }

        return $model;
    }
}
