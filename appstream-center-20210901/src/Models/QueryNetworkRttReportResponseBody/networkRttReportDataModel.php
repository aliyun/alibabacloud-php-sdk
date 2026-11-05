<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNetworkRttReportResponseBody;

use AlibabaCloud\Dara\Model;

class networkRttReportDataModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var int
     */
    public $lowRttUserCount;

    /**
     * @var float
     */
    public $lowRttUserRate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $rttAvg;

    /**
     * @var float
     */
    public $rttMax;

    /**
     * @var float
     */
    public $rttMin;

    /**
     * @var string
     */
    public $statEndDate;

    /**
     * @var string
     */
    public $statStartDate;

    /**
     * @var int
     */
    public $totalUserCount;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'lowRttUserCount' => 'LowRttUserCount',
        'lowRttUserRate' => 'LowRttUserRate',
        'regionId' => 'RegionId',
        'rttAvg' => 'RttAvg',
        'rttMax' => 'RttMax',
        'rttMin' => 'RttMin',
        'statEndDate' => 'StatEndDate',
        'statStartDate' => 'StatStartDate',
        'totalUserCount' => 'TotalUserCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->lowRttUserCount) {
            $res['LowRttUserCount'] = $this->lowRttUserCount;
        }

        if (null !== $this->lowRttUserRate) {
            $res['LowRttUserRate'] = $this->lowRttUserRate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rttAvg) {
            $res['RttAvg'] = $this->rttAvg;
        }

        if (null !== $this->rttMax) {
            $res['RttMax'] = $this->rttMax;
        }

        if (null !== $this->rttMin) {
            $res['RttMin'] = $this->rttMin;
        }

        if (null !== $this->statEndDate) {
            $res['StatEndDate'] = $this->statEndDate;
        }

        if (null !== $this->statStartDate) {
            $res['StatStartDate'] = $this->statStartDate;
        }

        if (null !== $this->totalUserCount) {
            $res['TotalUserCount'] = $this->totalUserCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['LowRttUserCount'])) {
            $model->lowRttUserCount = $map['LowRttUserCount'];
        }

        if (isset($map['LowRttUserRate'])) {
            $model->lowRttUserRate = $map['LowRttUserRate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RttAvg'])) {
            $model->rttAvg = $map['RttAvg'];
        }

        if (isset($map['RttMax'])) {
            $model->rttMax = $map['RttMax'];
        }

        if (isset($map['RttMin'])) {
            $model->rttMin = $map['RttMin'];
        }

        if (isset($map['StatEndDate'])) {
            $model->statEndDate = $map['StatEndDate'];
        }

        if (isset($map['StatStartDate'])) {
            $model->statStartDate = $map['StatStartDate'];
        }

        if (isset($map['TotalUserCount'])) {
            $model->totalUserCount = $map['TotalUserCount'];
        }

        return $model;
    }
}
