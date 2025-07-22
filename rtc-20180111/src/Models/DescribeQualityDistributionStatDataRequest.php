<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityDistributionStatDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * This parameter is required.
     *
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 1615910399
     *
     * @var int
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example 1615824000
     *
     * @var int
     */
    public $startDate;

    /**
     * @description This parameter is required.
     *
     * @example CHANNEL_ONLINE
     *
     * @var string
     */
    public $statDim;
    protected $_name = [
        'appId' => 'AppId',
        'endDate' => 'EndDate',
        'startDate' => 'StartDate',
        'statDim' => 'StatDim',
    ];

    public function validate() {}

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
     * @return DescribeQualityDistributionStatDataRequest
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
