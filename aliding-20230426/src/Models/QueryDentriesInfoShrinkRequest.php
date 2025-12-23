<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryDentriesInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appIdsForAppPropertiesShrink;

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
    public $withThumbnail;
    protected $_name = [
        'appIdsForAppPropertiesShrink' => 'AppIdsForAppProperties',
        'dentryId' => 'DentryId',
        'spaceId' => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
        'withThumbnail' => 'WithThumbnail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['WithThumbnail'])) {
            $model->withThumbnail = $map['WithThumbnail'];
        }

        return $model;
    }
}
