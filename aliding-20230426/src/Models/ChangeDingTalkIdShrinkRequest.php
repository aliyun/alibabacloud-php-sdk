<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ChangeDingTalkIdShrinkRequest extends Model
{
    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
