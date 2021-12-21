<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsageDistributionStatDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 结束时间，秒级时间戳：如1609344000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description 开始时间，秒级时间戳：如1609344000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description 统计维度，支持最多填入一个 CHANNEL_ONLINE, NETWORK, OS
     *
     * @var string
     */
    public $statDim;
    protected $_name = [
        'appId'     => 'AppId',
        'endDate'   => 'EndDate',
        'startDate' => 'StartDate',
        'statDim'   => 'StatDim',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->statDim) {
            $res['StatDim'] = $this->statDim;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageDistributionStatDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StatDim'])) {
            $model->statDim = $map['StatDim'];
        }

        return $model;
    }
}
