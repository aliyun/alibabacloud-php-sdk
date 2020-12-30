<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class userProfileDTO extends Model
{
    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $englishName;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'dataSource'  => 'DataSource',
        'avatar'      => 'Avatar',
        'email'       => 'Email',
        'mobile'      => 'Mobile',
        'userId'      => 'UserId',
        'createdAt'   => 'CreatedAt',
        'englishName' => 'EnglishName',
        'nickName'    => 'NickName',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->englishName) {
            $res['EnglishName'] = $this->englishName;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProfileDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['EnglishName'])) {
            $model->englishName = $map['EnglishName'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
