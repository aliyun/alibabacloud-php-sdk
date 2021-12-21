<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserListRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 搜索的频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 查询的结束时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $endTs;

    /**
     * @description 过滤的异常类型，多个使用半角逗号分隔 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢
     *
     * @var string
     */
    public $faultTypes;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页数量
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 查询的开始时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $startTs;

    /**
     * @description 搜索的用户ID
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
