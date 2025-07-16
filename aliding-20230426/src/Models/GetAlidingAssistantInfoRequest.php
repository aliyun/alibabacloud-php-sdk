<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAlidingAssistantInfoRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetAlidingAssistantInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $assistantId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'assistantId' => 'AssistantId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['AssistantId'] = $this->assistantId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlidingAssistantInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistantId'])) {
            $model->assistantId = $map['AssistantId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
