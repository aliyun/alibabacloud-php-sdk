<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SwitchMainOrgShrinkRequest extends Model
{
    /**
     * @example 21001
     *
     * @var int
     */
    public $targetOrgId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'targetOrgId' => 'TargetOrgId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetOrgId) {
            $res['TargetOrgId'] = $this->targetOrgId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchMainOrgShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetOrgId'])) {
            $model->targetOrgId = $map['TargetOrgId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
