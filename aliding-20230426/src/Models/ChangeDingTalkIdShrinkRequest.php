<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ChangeDingTalkIdShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dingTalkId' => 'DingTalkId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingTalkId) {
            $res['DingTalkId'] = $this->dingTalkId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDingTalkIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingTalkId'])) {
            $model->dingTalkId = $map['DingTalkId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
