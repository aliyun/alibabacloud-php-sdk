<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeCreditInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $punishTimes;

    /**
     * @var int
     */
    public $lastOrderTime;

    /**
     * @var int
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userLevel;

    /**
     * @var int
     */
    public $blackTimes;

    /**
     * @var string
     */
    public $newCreatetime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string[]
     */
    public $productid;
    protected $_name = [
        'punishTimes'   => 'PunishTimes',
        'lastOrderTime' => 'LastOrderTime',
        'lastLoginTime' => 'LastLoginTime',
        'requestId'     => 'RequestId',
        'userLevel'     => 'UserLevel',
        'blackTimes'    => 'BlackTimes',
        'newCreatetime' => 'NewCreatetime',
        'duration'      => 'Duration',
        'productid'     => 'Productid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->punishTimes) {
            $res['PunishTimes'] = $this->punishTimes;
        }
        if (null !== $this->lastOrderTime) {
            $res['LastOrderTime'] = $this->lastOrderTime;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
        }
        if (null !== $this->blackTimes) {
            $res['BlackTimes'] = $this->blackTimes;
        }
        if (null !== $this->newCreatetime) {
            $res['NewCreatetime'] = $this->newCreatetime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->productid) {
            $res['Productid'] = $this->productid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCreditInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PunishTimes'])) {
            $model->punishTimes = $map['PunishTimes'];
        }
        if (isset($map['LastOrderTime'])) {
            $model->lastOrderTime = $map['LastOrderTime'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }
        if (isset($map['BlackTimes'])) {
            $model->blackTimes = $map['BlackTimes'];
        }
        if (isset($map['NewCreatetime'])) {
            $model->newCreatetime = $map['NewCreatetime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Productid'])) {
            if (!empty($map['Productid'])) {
                $model->productid = $map['Productid'];
            }
        }

        return $model;
    }
}
