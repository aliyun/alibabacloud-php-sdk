<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models;

use AlibabaCloud\Tea\Model;

class QueryCarbonTrackShrinkRequest extends Model
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
     * @var string
     */
    public $uidsShrink;
    protected $_name = [
        'endTime'         => 'EndTime',
        'filterRDAccount' => 'FilterRDAccount',
        'group'           => 'Group',
        'startTime'       => 'StartTime',
        'uidsShrink'      => 'Uids',
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
        if (null !== $this->uidsShrink) {
            $res['Uids'] = $this->uidsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCarbonTrackShrinkRequest
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
        if (isset($map['Uids'])) {
            $model->uidsShrink = $map['Uids'];
        }

        return $model;
    }
}
