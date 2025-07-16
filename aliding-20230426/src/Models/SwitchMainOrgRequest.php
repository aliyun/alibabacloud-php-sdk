<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SwitchMainOrgRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class SwitchMainOrgRequest extends Model
{
    /**
     * @example 21001
     *
     * @var int
     */
    public $targetOrgId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'targetOrgId' => 'TargetOrgId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetOrgId) {
            $res['TargetOrgId'] = $this->targetOrgId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchMainOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetOrgId'])) {
            $model->targetOrgId = $map['TargetOrgId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
