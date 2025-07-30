<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTokenRequest extends Model
{
    /**
     * @description The time when the share link expires. Default value: 604800. Minimum value: 0. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the job to be shared.
     *
     * @example dlc*******
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the job that you want to share. Valid values: job and tensorboard.
     *
     * @example job
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
