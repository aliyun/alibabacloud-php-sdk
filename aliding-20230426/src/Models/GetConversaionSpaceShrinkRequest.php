<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetConversaionSpaceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cidB8Pzg****FIWPv2PMA==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'openConversationId'  => 'OpenConversationId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConversaionSpaceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
