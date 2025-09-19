<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupStatisticsResponseBody\regionCountList;

class DescribeUniBackupStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $protectedDatabaseCount;

    /**
     * @var regionCountList[]
     */
    public $regionCountList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $restoringTaskCount;

    /**
     * @var int
     */
    public $totalRecoverableCount;

    /**
     * @var int
     */
    public $totalRestoreTaskCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->regionCountList)) {
            Model::validateArray($this->regionCountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectedDatabaseCount) {
            $res['ProtectedDatabaseCount'] = $this->protectedDatabaseCount;
        }

        if (null !== $this->regionCountList) {
            if (\is_array($this->regionCountList)) {
                $res['RegionCountList'] = [];
                $n1 = 0;
                foreach ($this->regionCountList as $item1) {
                    $res['RegionCountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectedDatabaseCount'])) {
            $model->protectedDatabaseCount = $map['ProtectedDatabaseCount'];
        }

        if (isset($map['RegionCountList'])) {
            if (!empty($map['RegionCountList'])) {
                $model->regionCountList = [];
                $n1 = 0;
                foreach ($map['RegionCountList'] as $item1) {
                    $model->regionCountList[$n1] = regionCountList::fromMap($item1);
                    ++$n1;
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
