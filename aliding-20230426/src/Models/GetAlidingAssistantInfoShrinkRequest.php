<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetAlidingAssistantInfoShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'assistantId' => 'AssistantId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['AssistantId'] = $this->assistantId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlidingAssistantInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistantId'])) {
            $model->assistantId = $map['AssistantId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
