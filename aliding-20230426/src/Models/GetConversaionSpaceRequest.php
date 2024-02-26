<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetConversaionSpaceRequest extends Model
{
    /**
     * @example cidB8Pzg****FIWPv2PMA==
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
     * @return GetConversaionSpaceRequest
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
