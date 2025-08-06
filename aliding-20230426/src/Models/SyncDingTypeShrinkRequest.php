<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SyncDingTypeShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $workNo;
    protected $_name = [
        'dingType' => 'DingType',
        'isDimission' => 'IsDimission',
        'source' => 'Source',
        'tenantContextShrink' => 'TenantContext',
        'workNo' => 'WorkNo',
    ];

    public function validate()
    {
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

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WorkNo'])) {
            $model->workNo = $map['WorkNo'];
        }

        return $model;
    }
}
