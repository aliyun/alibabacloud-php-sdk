<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SmartqAuthTransferRequest extends Model
{
    /**
     * @var string
     */
    public $originUserId;

    /**
     * @var string
     */
    public $targetUserIds;
    protected $_name = [
        'originUserId' => 'OriginUserId',
        'targetUserIds' => 'TargetUserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originUserId) {
            $res['OriginUserId'] = $this->originUserId;
        }

        if (null !== $this->targetUserIds) {
            $res['TargetUserIds'] = $this->targetUserIds;
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
        if (isset($map['OriginUserId'])) {
            $model->originUserId = $map['OriginUserId'];
        }

        if (isset($map['TargetUserIds'])) {
            $model->targetUserIds = $map['TargetUserIds'];
        }

        return $model;
    }
}
