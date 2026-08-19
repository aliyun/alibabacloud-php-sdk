<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetTokenRequest extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var TokenSettings
     */
    public $tokenSettings;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
        'tokenSettings' => 'TokenSettings',
    ];

    public function validate()
    {
        if (null !== $this->tokenSettings) {
            $this->tokenSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tokenSettings) {
            $res['TokenSettings'] = null !== $this->tokenSettings ? $this->tokenSettings->toArray($noStream) : $this->tokenSettings;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TokenSettings'])) {
            $model->tokenSettings = TokenSettings::fromMap($map['TokenSettings']);
        }

        return $model;
    }
}
