<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeRequest\tenantContext;

class SyncDingTypeRequest extends Model
{
    /**
     * @var string
     */
    public $dingType;
    /**
     * @var string
     */
    public $isDimission;
    /**
     * @var string
     */
    public $source;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    /**
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
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->workNo) {
            $res['WorkNo'] = $this->workNo;
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
