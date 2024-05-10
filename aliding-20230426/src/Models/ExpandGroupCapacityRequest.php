<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ExpandGroupCapacityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cidt*****Xa4K10w==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'openConversationId' => 'OpenConversationId',
        'tenantContext'      => 'TenantContext',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpandGroupCapacityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
