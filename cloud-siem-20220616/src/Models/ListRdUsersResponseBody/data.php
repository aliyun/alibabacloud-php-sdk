<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the account can be used to view the logs and alerts within the account.
     *
     * @example true
     *
     * @var bool
     */
    public $delegatedOrNot;

    /**
     * @description Indicates whether the account is added to the threat analysis feature for centralized management. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $joined;

    /**
     * @description The time when the account was added to the threat analysis feature.
     *
     * @example 2013-10-01 00:00:00
     *
     * @var string
     */
    public $joinedTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to purchase the threat analysis feature.
     *
     * @example 123XXXXXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @description The ID of the Alibaba Cloud account that is used to perform operations supported by the threat analysis feature.
     *
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;

    /**
     * @description The username of the Alibaba Cloud account that can be used to perform operations supported by the threat analysis feature.
     *
     * @example sas_account_xxx
     *
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'delegatedOrNot' => 'DelegatedOrNot',
        'joined'         => 'Joined',
        'joinedTime'     => 'JoinedTime',
        'mainUserId'     => 'MainUserId',
        'subUserId'      => 'SubUserId',
        'subUserName'    => 'SubUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
