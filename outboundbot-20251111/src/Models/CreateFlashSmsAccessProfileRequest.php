<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateFlashSmsAccessProfileRequest\accessProfile;

class CreateFlashSmsAccessProfileRequest extends Model
{
    /**
     * @var accessProfile
     */
    public $accessProfile;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $providerId;
    protected $_name = [
        'accessProfile' => 'AccessProfile',
        'instanceId' => 'InstanceId',
        'providerId' => 'ProviderId',
    ];

    public function validate()
    {
        if (null !== $this->accessProfile) {
            $this->accessProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessProfile) {
            $res['AccessProfile'] = null !== $this->accessProfile ? $this->accessProfile->toArray($noStream) : $this->accessProfile;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
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
        if (isset($map['AccessProfile'])) {
            $model->accessProfile = accessProfile::fromMap($map['AccessProfile']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        return $model;
    }
}
