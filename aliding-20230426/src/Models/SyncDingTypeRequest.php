<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SyncDingTypeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ANT_DING
     *
     * @var string
     */
    public $dingType;

    /**
     * @example y
     *
     * @var string
     */
    public $isDimission;

    /**
     * @description This parameter is required.
     *
     * @example antding
     *
     * @var string
     */
    public $source;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 012345
     *
     * @var string
     */
    public $workNo;
    protected $_name = [
        'dingType'      => 'DingType',
        'isDimission'   => 'IsDimission',
        'source'        => 'Source',
        'tenantContext' => 'TenantContext',
        'workNo'        => 'WorkNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingType) {
            $res['DingType'] = $this->dingType;
        }
        if (null !== $this->isDimission) {
            $res['IsDimission'] = $this->isDimission;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->workNo) {
            $res['WorkNo'] = $this->workNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDingTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingType'])) {
            $model->dingType = $map['DingType'];
        }
        if (isset($map['IsDimission'])) {
            $model->isDimission = $map['IsDimission'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['WorkNo'])) {
            $model->workNo = $map['WorkNo'];
        }

        return $model;
    }
}
