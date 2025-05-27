<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $delegatedOrNot;

    /**
     * @var bool
     */
    public $joined;

    /**
     * @var string
     */
    public $joinedTime;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'delegatedOrNot' => 'DelegatedOrNot',
        'joined' => 'Joined',
        'joinedTime' => 'JoinedTime',
        'mainUserId' => 'MainUserId',
        'subUserId' => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delegatedOrNot) {
            $res['DelegatedOrNot'] = $this->delegatedOrNot;
        }

        if (null !== $this->joined) {
            $res['Joined'] = $this->joined;
        }

        if (null !== $this->joinedTime) {
            $res['JoinedTime'] = $this->joinedTime;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
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
        if (isset($map['DelegatedOrNot'])) {
            $model->delegatedOrNot = $map['DelegatedOrNot'];
        }

        if (isset($map['Joined'])) {
            $model->joined = $map['Joined'];
        }

        if (isset($map['JoinedTime'])) {
            $model->joinedTime = $map['JoinedTime'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
