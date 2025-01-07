<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetOrgOrWebOpenDocContentTaskIdRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryUuid'    => 'DentryUuid',
        'generateCp'    => 'GenerateCp',
        'scopeType'     => 'ScopeType',
        'targetFormat'  => 'TargetFormat',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrgOrWebOpenDocContentTaskIdRequest
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
