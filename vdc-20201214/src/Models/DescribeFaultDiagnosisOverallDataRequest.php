<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisOverallDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 结束时间，秒级时间戳：1609344000
     *
     * @var int
     */
    public $endTs;

    /**
     * @description 开始时间，秒级时间戳：1609344000
     *
     * @var int
     */
    public $startTs;

    /**
     * @description 获取数据统计维度： JOIN_SLOW_USER：进频道慢用户数 AUDIO_STUCK_USER：音频卡顿用户数 VIDEO_STUCK_USER：视频卡顿用户数 VIDEO_VAGUE_USER：视频模糊用户数 HIGH_DELAY_USER：通话延迟高用户数 FIRST_SCREEN_SLOW_USER：接收首屏慢用户数
     *
     * @var string
     */
    public $statDim;
    protected $_name = [
        'appId'   => 'AppId',
        'endTs'   => 'EndTs',
        'startTs' => 'StartTs',
        'statDim' => 'StatDim',
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
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->statDim) {
            $res['StatDim'] = $this->statDim;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisOverallDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['StatDim'])) {
            $model->statDim = $map['StatDim'];
        }

        return $model;
    }
}
