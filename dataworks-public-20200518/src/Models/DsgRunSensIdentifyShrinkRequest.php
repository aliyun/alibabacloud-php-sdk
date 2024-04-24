<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgRunSensIdentifyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $esMetaParamsShrink;

    /**
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'esMetaParamsShrink' => 'EsMetaParams',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esMetaParamsShrink) {
            $res['EsMetaParams'] = $this->esMetaParamsShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgRunSensIdentifyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EsMetaParams'])) {
            $model->esMetaParamsShrink = $map['EsMetaParams'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
