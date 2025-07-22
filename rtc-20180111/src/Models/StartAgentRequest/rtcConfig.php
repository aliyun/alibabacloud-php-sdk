<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;

use AlibabaCloud\Tea\Model;

class rtcConfig extends Model
{
    /**
     * @var string[]
     */
    public $targetUserIds;

    /**
     * @description This parameter is required.
     *
     * @example 423341
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'targetUserIds' => 'TargetUserIds',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetUserIds) {
            $res['TargetUserIds'] = $this->targetUserIds;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rtcConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetUserIds'])) {
            if (!empty($map['TargetUserIds'])) {
                $model->targetUserIds = $map['TargetUserIds'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
