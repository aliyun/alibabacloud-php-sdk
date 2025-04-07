<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushDeviceNotificationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantInfoShrink;

    /**
     * @var string
     */
    public $bodyShrink;
    protected $_name = [
        'tenantInfoShrink' => 'TenantInfo',
        'bodyShrink' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantInfoShrink) {
            $res['TenantInfo'] = $this->tenantInfoShrink;
        }

        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
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
        if (isset($map['TenantInfo'])) {
            $model->tenantInfoShrink = $map['TenantInfo'];
        }

        if (isset($map['body'])) {
            $model->bodyShrink = $map['body'];
        }

        return $model;
    }
}
