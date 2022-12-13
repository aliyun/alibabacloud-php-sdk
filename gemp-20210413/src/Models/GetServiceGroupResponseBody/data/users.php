<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @example 10
     *
     * @var int
     */
    public $userId;

    /**
     * @example jack
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'phone'          => 'phone',
        'serviceGroupId' => 'serviceGroupId',
        'userId'         => 'userId',
        'userName'       => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
