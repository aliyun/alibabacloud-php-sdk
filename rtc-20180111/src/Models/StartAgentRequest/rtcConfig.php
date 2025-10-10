<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;

use AlibabaCloud\Dara\Model;

class rtcConfig extends Model
{
    /**
     * @var string[]
     */
    public $targetUserIds;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userInactivityTimeout;
    protected $_name = [
        'targetUserIds' => 'TargetUserIds',
        'userId' => 'UserId',
        'userInactivityTimeout' => 'UserInactivityTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->targetUserIds)) {
            Model::validateArray($this->targetUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetUserIds) {
            if (\is_array($this->targetUserIds)) {
                $res['TargetUserIds'] = [];
                $n1 = 0;
                foreach ($this->targetUserIds as $item1) {
                    $res['TargetUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userInactivityTimeout) {
            $res['UserInactivityTimeout'] = $this->userInactivityTimeout;
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
        if (isset($map['TargetUserIds'])) {
            if (!empty($map['TargetUserIds'])) {
                $model->targetUserIds = [];
                $n1 = 0;
                foreach ($map['TargetUserIds'] as $item1) {
                    $model->targetUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserInactivityTimeout'])) {
            $model->userInactivityTimeout = $map['UserInactivityTimeout'];
        }

        return $model;
    }
}
