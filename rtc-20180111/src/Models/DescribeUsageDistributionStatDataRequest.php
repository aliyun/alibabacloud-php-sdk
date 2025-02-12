<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeUsageDistributionStatDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $endDate;
    /**
     * @var int
     */
    public $startDate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
