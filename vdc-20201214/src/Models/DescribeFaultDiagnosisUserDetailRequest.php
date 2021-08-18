<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserDetailRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 频道创建时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 异常类型 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢
     *
     * @var string
     */
    public $faultType;

    /**
     * @description 是否查询通话用户信息，为空默认是false
     *
     * @var bool
     */
    public $queryCallUserInfo;
    protected $_name = [
        'appId'             => 'AppId',
        'channelId'         => 'ChannelId',
        'createdTs'         => 'CreatedTs',
        'userId'            => 'UserId',
        'faultType'         => 'FaultType',
        'queryCallUserInfo' => 'QueryCallUserInfo',
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
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
        }
        if (null !== $this->queryCallUserInfo) {
            $res['QueryCallUserInfo'] = $this->queryCallUserInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisUserDetailRequest
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
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }
        if (isset($map['QueryCallUserInfo'])) {
            $model->queryCallUserInfo = $map['QueryCallUserInfo'];
        }

        return $model;
    }
}
