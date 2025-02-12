<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeCallListRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $callStatus;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var int
     */
    public $endTs;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $queryMode;
    /**
     * @var int
     */
    public $startTs;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'      => 'AppId',
        'callStatus' => 'CallStatus',
        'channelId'  => 'ChannelId',
        'endTs'      => 'EndTs',
        'orderBy'    => 'OrderBy',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'queryMode'  => 'QueryMode',
        'startTs'    => 'StartTs',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }

        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }

        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
