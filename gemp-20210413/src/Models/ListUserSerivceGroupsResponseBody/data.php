<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsResponseBody\data\serviceGroups;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 12121****@163.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @example 321
     *
     * @var int
     */
    public $ramId;

    /**
     * @var serviceGroups[]
     */
    public $serviceGroups;

    /**
     * @example 321
     *
     * @var int
     */
    public $userId;

    /**
     * @example 小明
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'email'         => 'email',
        'phone'         => 'phone',
        'ramId'         => 'ramId',
        'serviceGroups' => 'serviceGroups',
        'userId'        => 'userId',
        'username'      => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->serviceGroups) {
            $res['serviceGroups'] = [];
            if (null !== $this->serviceGroups && \is_array($this->serviceGroups)) {
                $n = 0;
                foreach ($this->serviceGroups as $item) {
                    $res['serviceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['serviceGroups'])) {
            if (!empty($map['serviceGroups'])) {
                $model->serviceGroups = [];
                $n                    = 0;
                foreach ($map['serviceGroups'] as $item) {
                    $model->serviceGroups[$n++] = null !== $item ? serviceGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
