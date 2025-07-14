<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SmartqAuthTransferRequest extends Model
{
    /**
     * @description Source user ID.
     *
     * This parameter is required.
     *
     * @example ASDHASD*************12EASDA
     *
     * @var string
     */
    public $originUserId;

    /**
     * @description Target user ID array, separated by English commas.
     * >Warning: The number of user IDs cannot exceed 100.
     *
     * This parameter is required.
     *
     * @example 12313********dasfa,ASDASF*****SDAFEEG
     *
     * @var string
     */
    public $targetUserIds;
    protected $_name = [
        'originUserId' => 'OriginUserId',
        'targetUserIds' => 'TargetUserIds',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SmartqAuthTransferRequest
     */
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
