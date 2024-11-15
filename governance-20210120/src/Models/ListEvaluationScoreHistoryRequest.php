<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ListEvaluationScoreHistoryRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member. This parameter takes effect only when a multi-account governance maturity check is performed.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The end of the time range to query. Specify the time in the YYYY-MM-DD format.
     *
     * By default, the historical scores that were generated in the seven days before the current date are queried.
     * @example 2024-07-11
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the YYYY-MM-DD format.
     *
     * You can query the historical scores within the previous 180 days.
     * @example 2024-06-11
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'accountId' => 'AccountId',
        'endDate'   => 'EndDate',
        'regionId'  => 'RegionId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvaluationScoreHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
