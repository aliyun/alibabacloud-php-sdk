<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelAreaDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class areaStatList extends Model
{
    /**
     * @description 地域名称，例如：中国_浙江省_杭州市。
     *
     * @var string
     */
    public $areaName;

    /**
     * @description 通信人数。
     *
     * @var int
     */
    public $callUserCount;

    /**
     * @description 发布端人数。
     *
     * @var int
     */
    public $pubUserCount;

    /**
     * @description 订阅端人数。
     *
     * @var int
     */
    public $subUserCount;

    /**
     * @description 优质传输率，用小数表示，例如0.9999表示优质传输率为99.99%。
     *
     * @var string
     */
    public $highQualityTransmissionRate;
    protected $_name = [
        'areaName'                    => 'AreaName',
        'callUserCount'               => 'CallUserCount',
        'pubUserCount'                => 'PubUserCount',
        'subUserCount'                => 'SubUserCount',
        'highQualityTransmissionRate' => 'HighQualityTransmissionRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->callUserCount) {
            $res['CallUserCount'] = $this->callUserCount;
        }
        if (null !== $this->pubUserCount) {
            $res['PubUserCount'] = $this->pubUserCount;
        }
        if (null !== $this->subUserCount) {
            $res['SubUserCount'] = $this->subUserCount;
        }
        if (null !== $this->highQualityTransmissionRate) {
            $res['HighQualityTransmissionRate'] = $this->highQualityTransmissionRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areaStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['CallUserCount'])) {
            $model->callUserCount = $map['CallUserCount'];
        }
        if (isset($map['PubUserCount'])) {
            $model->pubUserCount = $map['PubUserCount'];
        }
        if (isset($map['SubUserCount'])) {
            $model->subUserCount = $map['SubUserCount'];
        }
        if (isset($map['HighQualityTransmissionRate'])) {
            $model->highQualityTransmissionRate = $map['HighQualityTransmissionRate'];
        }

        return $model;
    }
}
