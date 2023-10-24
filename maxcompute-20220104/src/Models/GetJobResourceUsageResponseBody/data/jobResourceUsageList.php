<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobResourceUsageList extends Model
{
    /**
     * @description The total number of used compute units (CUs).
     *
     * @example 1185100
     *
     * @var int
     */
    public $cuUsage;

    /**
     * @description The start date of the query in the format of yyyy-MM-dd.
     *
     * @example 2023-05-09
     *
     * @var string
     */
    public $date;

    /**
     * @description The job executor.
     *
     * @example ALIYUN$xxx@test.aliyunid.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @description The total memory usage.
     *
     * @example 15169536
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @description The quota nickname.
     *
     * @example my_quota
     *
     * @var string
     */
    public $quotaNickname;
    protected $_name = [
        'cuUsage'       => 'cuUsage',
        'date'          => 'date',
        'jobOwner'      => 'jobOwner',
        'memoryUsage'   => 'memoryUsage',
        'quotaNickname' => 'quotaNickname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cuUsage) {
            $res['cuUsage'] = $this->cuUsage;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }
        if (null !== $this->memoryUsage) {
            $res['memoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResourceUsageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cuUsage'])) {
            $model->cuUsage = $map['cuUsage'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }
        if (isset($map['memoryUsage'])) {
            $model->memoryUsage = $map['memoryUsage'];
        }
        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }

        return $model;
    }
}
