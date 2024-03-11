<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserListRequest extends Model
{
    /**
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 311
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1615892596
     *
     * @var int
     */
    public $endTs;

    /**
     * @example JOIN_SLOW,AUDIO_STUCK
     *
     * @var string
     */
    public $faultTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1615806196
     *
     * @var int
     */
    public $startTs;

    /**
     * @example 140c1f12****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisUserListRequest
     */
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
