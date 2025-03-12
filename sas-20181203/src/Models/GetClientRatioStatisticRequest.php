<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetClientRatioStatisticRequest extends Model
{
    /**
     * @description The ID of the primary account of the Resource Directory member account.
     * > call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) interface to obtain this parameter.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description An array that consists of the details of a statistical type.
     *
     * @var string[]
     */
    public $statisticTypes;

    /**
     * @description The timestamp that specifies the end of the time range to collect statistics. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1686412799999
     *
     * @var int
     */
    public $timeEnd;

    /**
     * @description The timestamp that specifies the beginning of the time range to collect statistics. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1671382800000
     *
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'statisticTypes'             => 'StatisticTypes',
        'timeEnd'                    => 'TimeEnd',
        'timeStart'                  => 'TimeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->statisticTypes) {
            $res['StatisticTypes'] = $this->statisticTypes;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientRatioStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['StatisticTypes'])) {
            if (!empty($map['StatisticTypes'])) {
                $model->statisticTypes = $map['StatisticTypes'];
            }
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
