<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody;

use AlibabaCloud\Tea\Model;

class overallData extends Model
{
    /**
     * @description 平均通信连接的用时，单位：秒。
     *
     * @var float
     */
    public $connAvgTime;

    /**
     * @description 5秒内连通成功率，用小数表示，例如1.0表示连通成功率为100%。
     *
     * @var float
     */
    public $fiveSecJoinRate;

    /**
     * @description 整体音频卡顿率，用小数表示，例如0.02表示音频卡顿率为2%。
     *
     * @var float
     */
    public $totalAudioStuckRate;

    /**
     * @description 整体视频卡顿率，用小数表示，例如0.02表示视频卡顿率为2%。
     *
     * @var float
     */
    public $totalVideoStuckRate;

    /**
     * @description 整体视频模糊率，用小数表示，例如0.02表示视频模糊率为2%。
     *
     * @var float
     */
    public $totalVideoVagueRate;
    protected $_name = [
        'connAvgTime'         => 'ConnAvgTime',
        'fiveSecJoinRate'     => 'FiveSecJoinRate',
        'totalAudioStuckRate' => 'TotalAudioStuckRate',
        'totalVideoStuckRate' => 'TotalVideoStuckRate',
        'totalVideoVagueRate' => 'TotalVideoVagueRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAvgTime) {
            $res['ConnAvgTime'] = $this->connAvgTime;
        }
        if (null !== $this->fiveSecJoinRate) {
            $res['FiveSecJoinRate'] = $this->fiveSecJoinRate;
        }
        if (null !== $this->totalAudioStuckRate) {
            $res['TotalAudioStuckRate'] = $this->totalAudioStuckRate;
        }
        if (null !== $this->totalVideoStuckRate) {
            $res['TotalVideoStuckRate'] = $this->totalVideoStuckRate;
        }
        if (null !== $this->totalVideoVagueRate) {
            $res['TotalVideoVagueRate'] = $this->totalVideoVagueRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overallData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnAvgTime'])) {
            $model->connAvgTime = $map['ConnAvgTime'];
        }
        if (isset($map['FiveSecJoinRate'])) {
            $model->fiveSecJoinRate = $map['FiveSecJoinRate'];
        }
        if (isset($map['TotalAudioStuckRate'])) {
            $model->totalAudioStuckRate = $map['TotalAudioStuckRate'];
        }
        if (isset($map['TotalVideoStuckRate'])) {
            $model->totalVideoStuckRate = $map['TotalVideoStuckRate'];
        }
        if (isset($map['TotalVideoVagueRate'])) {
            $model->totalVideoVagueRate = $map['TotalVideoVagueRate'];
        }

        return $model;
    }
}
