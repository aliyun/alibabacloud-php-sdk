<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeFaultDiagnosisUserListRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
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
    public $faultTypes;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
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
        'channelId'  => 'ChannelId',
        'endTs'      => 'EndTs',
        'faultTypes' => 'FaultTypes',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
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

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }

        if (null !== $this->faultTypes) {
            $res['FaultTypes'] = $this->faultTypes;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        if (isset($map['FaultTypes'])) {
            $model->faultTypes = $map['FaultTypes'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
