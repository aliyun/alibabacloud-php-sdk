<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponseBody\qualityOverallData\nodes;
use AlibabaCloud\Tea\Model;

class qualityOverallData extends Model
{
    /**
     * @description 概览数据类型，加入频道成功率： JOIN_CHANNEL_SUC_RATE 五秒加入频道成功率： JOIN_CHANNEL_SUC_FIVE_SEC_RATE  首次出声时间： AUDIO_SPEAK_OUT_DUR 首次出图时间： VIDEO_FIRST_PIC_DUR 音频卡顿率： AUDIO_STUCK_RATE 视频卡顿率： VIDEO_STUCK_RATE 音频延时： AUDIO_DELAY 视频延时： AUDIO_DELAY 音频优质传输率： AUDIO_HIGH_QUALITY_TRANSMISSION_RATE 视频优质传输率： VIDEO_HIGH_QUALITY_TRANSMISSION_RATE
     *
     * @var string
     */
    public $type;

    /**
     * @description 坐标点列表
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description 平均值
     *
     * @var string
     */
    public $average;
    protected $_name = [
        'type'    => 'Type',
        'nodes'   => 'Nodes',
        'average' => 'Average',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityOverallData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }

        return $model;
    }
}
