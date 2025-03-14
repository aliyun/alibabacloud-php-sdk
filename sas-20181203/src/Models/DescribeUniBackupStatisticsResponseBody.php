<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupStatisticsResponseBody\regionCountList;
use AlibabaCloud\Tea\Model;

class DescribeUniBackupStatisticsResponseBody extends Model
{
    /**
     * @description The number of protected database instances.
     *
     * @example 1
     *
     * @var int
     */
    public $protectedDatabaseCount;

    /**
     * @description The regions of the database instances.
     *
     * @var regionCountList[]
     */
    public $regionCountList;

    /**
     * @description The request ID.
     *
     * @example 7532B7EE-7CE7-5F4D-BF04-B12447DD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of the restoration tasks that are running.
     *
     * @example 0
     *
     * @var int
     */
    public $restoringTaskCount;

    /**
     * @description The total number of database instances that can be restored.
     *
     * @example 3
     *
     * @var int
     */
    public $totalRecoverableCount;

    /**
     * @description The total number of the restoration tasks.
     *
     * @example 10
     *
     * @var int
     */
    public $totalRestoreTaskCount;

    /**
     * @description The number of unprotected database instances.
     *
     * @example 5
     *
     * @var int
     */
    public $unprotectedDatabaseCount;
    protected $_name = [
        'protectedDatabaseCount' => 'ProtectedDatabaseCount',
        'regionCountList' => 'RegionCountList',
        'requestId' => 'RequestId',
        'restoringTaskCount' => 'RestoringTaskCount',
        'totalRecoverableCount' => 'TotalRecoverableCount',
        'totalRestoreTaskCount' => 'TotalRestoreTaskCount',
        'unprotectedDatabaseCount' => 'UnprotectedDatabaseCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectedDatabaseCount) {
            $res['ProtectedDatabaseCount'] = $this->protectedDatabaseCount;
        }
        if (null !== $this->regionCountList) {
            $res['RegionCountList'] = [];
            if (null !== $this->regionCountList && \is_array($this->regionCountList)) {
                $n = 0;
                foreach ($this->regionCountList as $item) {
                    $res['RegionCountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoringTaskCount) {
            $res['RestoringTaskCount'] = $this->restoringTaskCount;
        }
        if (null !== $this->totalRecoverableCount) {
            $res['TotalRecoverableCount'] = $this->totalRecoverableCount;
        }
        if (null !== $this->totalRestoreTaskCount) {
            $res['TotalRestoreTaskCount'] = $this->totalRestoreTaskCount;
        }
        if (null !== $this->unprotectedDatabaseCount) {
            $res['UnprotectedDatabaseCount'] = $this->unprotectedDatabaseCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniBackupStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectedDatabaseCount'])) {
            $model->protectedDatabaseCount = $map['ProtectedDatabaseCount'];
        }
        if (isset($map['RegionCountList'])) {
            if (!empty($map['RegionCountList'])) {
                $model->regionCountList = [];
                $n = 0;
                foreach ($map['RegionCountList'] as $item) {
                    $model->regionCountList[$n++] = null !== $item ? regionCountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoringTaskCount'])) {
            $model->restoringTaskCount = $map['RestoringTaskCount'];
        }
        if (isset($map['TotalRecoverableCount'])) {
            $model->totalRecoverableCount = $map['TotalRecoverableCount'];
        }
        if (isset($map['TotalRestoreTaskCount'])) {
            $model->totalRestoreTaskCount = $map['TotalRestoreTaskCount'];
        }
        if (isset($map['UnprotectedDatabaseCount'])) {
            $model->unprotectedDatabaseCount = $map['UnprotectedDatabaseCount'];
        }

        return $model;
    }
}
