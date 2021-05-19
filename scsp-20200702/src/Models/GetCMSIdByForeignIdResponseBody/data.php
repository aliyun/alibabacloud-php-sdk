<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetCMSIdByForeignIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $customerTypeId;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $foreignId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var bool
     */
    public $anonymity;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'status'         => 'Status',
        'customerTypeId' => 'CustomerTypeId',
        'avatar'         => 'Avatar',
        'gender'         => 'Gender',
        'foreignId'      => 'ForeignId',
        'userId'         => 'UserId',
        'nick'           => 'Nick',
        'anonymity'      => 'Anonymity',
        'phone'          => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->customerTypeId) {
            $res['CustomerTypeId'] = $this->customerTypeId;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->foreignId) {
            $res['ForeignId'] = $this->foreignId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->anonymity) {
            $res['Anonymity'] = $this->anonymity;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CustomerTypeId'])) {
            $model->customerTypeId = $map['CustomerTypeId'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['ForeignId'])) {
            $model->foreignId = $map['ForeignId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Anonymity'])) {
            $model->anonymity = $map['Anonymity'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
