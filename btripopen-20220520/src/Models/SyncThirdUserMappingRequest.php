<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class SyncThirdUserMappingRequest extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdChannelType;

    /**
     * @var string
     */
    public $thirdUserId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'status' => 'status',
        'thirdChannelType' => 'third_channel_type',
        'thirdUserId' => 'third_user_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thirdChannelType) {
            $res['third_channel_type'] = $this->thirdChannelType;
        }

        if (null !== $this->thirdUserId) {
            $res['third_user_id'] = $this->thirdUserId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['third_channel_type'])) {
            $model->thirdChannelType = $map['third_channel_type'];
        }

        if (isset($map['third_user_id'])) {
            $model->thirdUserId = $map['third_user_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
