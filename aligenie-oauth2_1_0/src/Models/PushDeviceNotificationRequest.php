<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationRequest\body;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationRequest\tenantInfo;

class PushDeviceNotificationRequest extends Model
{
    /**
     * @var tenantInfo
     */
    public $tenantInfo;

    /**
     * @var body
     */
    public $body;
    protected $_name = [
        'tenantInfo' => 'TenantInfo',
        'body' => 'body',
    ];

    public function validate()
    {
        if (null !== $this->tenantInfo) {
            $this->tenantInfo->validate();
        }
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantInfo) {
            $res['TenantInfo'] = null !== $this->tenantInfo ? $this->tenantInfo->toArray($noStream) : $this->tenantInfo;
        }

        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
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
            $model->tenantInfo = tenantInfo::fromMap($map['TenantInfo']);
        }

        if (isset($map['body'])) {
            $model->body = body::fromMap($map['body']);
        }

        return $model;
    }
}
