<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcRecordMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class rtcRecordMetricData extends Model
{
    /**
     * @description 日期，UTC格式
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description 服务区域
     *
     * @var string
     */
    public $serviceArea;

    /**
     * @description 规格
     *
     * @var string
     */
    public $taskProfile;

    /**
     * @description 输入路数
     *
     * @var string
     */
    public $type;

    /**
     * @description 分辨率
     *
     * @var string
     */
    public $ratio;

    /**
     * @description 时长分钟
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'timeStamp'   => 'TimeStamp',
        'serviceArea' => 'ServiceArea',
        'taskProfile' => 'TaskProfile',
        'type'        => 'Type',
        'ratio'       => 'Ratio',
        'duration'    => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rtcRecordMetricData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
