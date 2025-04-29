<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TripTaskQueryRequest extends Model
{
    /**
     * @var string
     */
    public $businessInstanceId;

    /**
     * @var string
     */
    public $thirdBusinessId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'businessInstanceId' => 'business_instance_id',
        'thirdBusinessId' => 'third_business_id',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
