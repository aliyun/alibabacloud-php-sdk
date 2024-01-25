<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\GetUserResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\GetUserResponseBody\user\dingTalkInfos;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @var dingTalkInfos[]
     */
    public $dingTalkInfos;

    /**
     * @example 12143124132
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example [s-dxsxxxxxx,s-dxsyyyyyyy]
     *
     * @var string
     */
    public $stores;

    /**
     * @example 1344***
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example USER_TYPE_COMPANY_OWNER
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'bid'           => 'Bid',
        'dingTalkInfos' => 'DingTalkInfos',
        'ownerId'       => 'OwnerId',
        'stores'        => 'Stores',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
        'userType'      => 'UserType',
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
        if (null !== $this->dingTalkInfos) {
            $res['DingTalkInfos'] = [];
            if (null !== $this->dingTalkInfos && \is_array($this->dingTalkInfos)) {
                $n = 0;
                foreach ($this->dingTalkInfos as $item) {
                    $res['DingTalkInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->stores) {
            $res['Stores'] = $this->stores;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['DingTalkInfos'])) {
            if (!empty($map['DingTalkInfos'])) {
                $model->dingTalkInfos = [];
                $n                    = 0;
                foreach ($map['DingTalkInfos'] as $item) {
                    $model->dingTalkInfos[$n++] = null !== $item ? dingTalkInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Stores'])) {
            $model->stores = $map['Stores'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
