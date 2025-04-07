<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationRequest\body;

use AlibabaCloud\Dara\Model;

class sendTarget extends Model
{
    /**
     * @var string
     */
    public $targetIdentity;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'targetIdentity' => 'TargetIdentity',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetIdentity) {
            $res['TargetIdentity'] = $this->targetIdentity;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['TargetIdentity'])) {
            $model->targetIdentity = $map['TargetIdentity'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
