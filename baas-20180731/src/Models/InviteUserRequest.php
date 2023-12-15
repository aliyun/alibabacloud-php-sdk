<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class InviteUserRequest extends Model
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
    public $userEmail;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'bid'       => 'Bid',
        'bizid'     => 'Bizid',
        'userEmail' => 'UserEmail',
        'userId'    => 'UserId',
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
        if (null !== $this->userEmail) {
            $res['UserEmail'] = $this->userEmail;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteUserRequest
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
        if (isset($map['UserEmail'])) {
            $model->userEmail = $map['UserEmail'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
