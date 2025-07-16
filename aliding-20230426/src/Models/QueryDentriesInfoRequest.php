<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentriesInfoRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryDentriesInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdsForAppProperties;

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
     * @var tenantContext
     */
    public $tenantContext;

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
        'appIdsForAppProperties' => 'AppIdsForAppProperties',
        'dentryId' => 'DentryId',
        'spaceId' => 'SpaceId',
        'tenantContext' => 'TenantContext',
        'unionId' => 'UnionId',
        'withThumbnail' => 'WithThumbnail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdsForAppProperties) {
            $res['AppIdsForAppProperties'] = $this->appIdsForAppProperties;
        }
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
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
     * @return QueryDentriesInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdsForAppProperties'])) {
            if (!empty($map['AppIdsForAppProperties'])) {
                $model->appIdsForAppProperties = $map['AppIdsForAppProperties'];
            }
        }
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
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
