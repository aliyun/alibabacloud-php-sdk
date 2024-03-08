<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models;

use AlibabaCloud\Tea\Model;

class QueryCarbonTrackRequest extends Model
{
    /**
     * @example 2023-02-01 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $filterRDAccount;

    /**
     * @example productCode
     *
     * @var string
     */
    public $group;

    /**
     * @example 2023-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $topNum;

    /**
     * @var string[]
     */
    public $uids;
    protected $_name = [
        'endTime'         => 'EndTime',
        'filterRDAccount' => 'FilterRDAccount',
        'group'           => 'Group',
        'startTime'       => 'StartTime',
        'topNum'          => 'TopNum',
        'uids'            => 'Uids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterRDAccount) {
            $res['FilterRDAccount'] = $this->filterRDAccount;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->topNum) {
            $res['TopNum'] = $this->topNum;
        }
        if (null !== $this->uids) {
            $res['Uids'] = $this->uids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCarbonTrackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterRDAccount'])) {
            $model->filterRDAccount = $map['FilterRDAccount'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TopNum'])) {
            $model->topNum = $map['TopNum'];
        }
        if (isset($map['Uids'])) {
            if (!empty($map['Uids'])) {
                $model->uids = $map['Uids'];
            }
        }

        return $model;
    }
}
