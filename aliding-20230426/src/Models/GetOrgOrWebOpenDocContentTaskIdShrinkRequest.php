<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetOrgOrWebOpenDocContentTaskIdShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 20eMKjyp810mMdK4Hz4B5BA6JxAZB1Gv
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @var bool
     */
    public $generateCp;

    /**
     * @example 0
     *
     * @var int
     */
    public $scopeType;

    /**
     * @example markdown
     *
     * @var string
     */
    public $targetFormat;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid'          => 'DentryUuid',
        'generateCp'          => 'GenerateCp',
        'scopeType'           => 'ScopeType',
        'targetFormat'        => 'TargetFormat',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->generateCp) {
            $res['GenerateCp'] = $this->generateCp;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->targetFormat) {
            $res['TargetFormat'] = $this->targetFormat;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrgOrWebOpenDocContentTaskIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['GenerateCp'])) {
            $model->generateCp = $map['GenerateCp'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['TargetFormat'])) {
            $model->targetFormat = $map['TargetFormat'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
