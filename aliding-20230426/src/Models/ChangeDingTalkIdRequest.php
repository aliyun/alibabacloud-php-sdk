<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ChangeDingTalkIdRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ChangeDingTalkIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4uf_iw54grufg9
     *
     * @var string
     */
    public $dingTalkId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dingTalkId' => 'DingTalkId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingTalkId) {
            $res['DingTalkId'] = $this->dingTalkId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDingTalkIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingTalkId'])) {
            $model->dingTalkId = $map['DingTalkId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
