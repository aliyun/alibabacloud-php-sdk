<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetClientRatioStatisticRequest extends Model
{
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string[]
     */
    public $statisticTypes;

    /**
     * @example 1686412799999
     *
     * @var int
     */
    public $timeEnd;

    /**
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
