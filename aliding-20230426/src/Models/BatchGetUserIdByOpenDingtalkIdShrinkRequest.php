<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchGetUserIdByOpenDingtalkIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $openDingtalkIdsShrink;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'openDingtalkIdsShrink' => 'openDingtalkIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->openDingtalkIdsShrink) {
            $res['openDingtalkIds'] = $this->openDingtalkIdsShrink;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['openDingtalkIds'])) {
            $model->openDingtalkIdsShrink = $map['openDingtalkIds'];
        }

        return $model;
    }
}
