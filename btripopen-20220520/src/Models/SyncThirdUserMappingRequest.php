<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class SyncThirdUserMappingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example weCom
     *
     * @var string
     */
    public $thirdChannelType;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $thirdUserId;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'status'           => 'status',
        'thirdChannelType' => 'third_channel_type',
        'thirdUserId'      => 'third_user_id',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SyncThirdUserMappingRequest
     */
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
