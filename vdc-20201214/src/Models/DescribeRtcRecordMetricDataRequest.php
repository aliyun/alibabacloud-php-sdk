<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcRecordMetricDataRequest extends Model
{
    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description 结束时间，UTC格式
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 服务区域
     *
     * @var string
     */
    public $serviceArea;

    /**
     * @description 起始时间，UTC格式
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId'       => 'AppId',
        'endTime'     => 'EndTime',
        'serviceArea' => 'ServiceArea',
        'startTime'   => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->serviceArea) {
            $res['ServiceArea'] = $this->serviceArea;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcRecordMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ServiceArea'])) {
            $model->serviceArea = $map['ServiceArea'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
