<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentriesInfoRequest\tenantContext;

class QueryDentriesInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdsForAppProperties;

    /**
     * @var string
     */
    public $dentryId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $unionId;

    /**
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

    public function validate()
    {
        if (\is_array($this->appIdsForAppProperties)) {
            Model::validateArray($this->appIdsForAppProperties);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdsForAppProperties) {
            if (\is_array($this->appIdsForAppProperties)) {
                $res['AppIdsForAppProperties'] = [];
                $n1 = 0;
                foreach ($this->appIdsForAppProperties as $item1) {
                    $res['AppIdsForAppProperties'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }

        if (null !== $this->withThumbnail) {
            $res['WithThumbnail'] = $this->withThumbnail;
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
        if (isset($map['AppIdsForAppProperties'])) {
            if (!empty($map['AppIdsForAppProperties'])) {
                $model->appIdsForAppProperties = [];
                $n1 = 0;
                foreach ($map['AppIdsForAppProperties'] as $item1) {
                    $model->appIdsForAppProperties[$n1++] = $item1;
                }
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
