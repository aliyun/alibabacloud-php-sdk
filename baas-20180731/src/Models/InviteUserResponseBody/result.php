<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\InviteUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fromBid;

    /**
     * @var int
     */
    public $fromUserId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'bid'        => 'Bid',
        'bizid'      => 'Bizid',
        'code'       => 'Code',
        'createTime' => 'CreateTime',
        'email'      => 'Email',
        'fromBid'    => 'FromBid',
        'fromUserId' => 'FromUserId',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->fromBid) {
            $res['FromBid'] = $this->fromBid;
        }
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['FromBid'])) {
            $model->fromBid = $map['FromBid'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
