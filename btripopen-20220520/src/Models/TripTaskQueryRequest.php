<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TripTaskQueryRequest extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $businessInstanceId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $thirdBusinessId;

    /**
     * @example thirdpart12138
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'businessInstanceId' => 'business_instance_id',
        'thirdBusinessId'    => 'third_business_id',
        'userId'             => 'user_id',
        'userName'           => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessInstanceId) {
            $res['business_instance_id'] = $this->businessInstanceId;
        }
        if (null !== $this->thirdBusinessId) {
            $res['third_business_id'] = $this->thirdBusinessId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TripTaskQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_instance_id'])) {
            $model->businessInstanceId = $map['business_instance_id'];
        }
        if (isset($map['third_business_id'])) {
            $model->thirdBusinessId = $map['third_business_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
