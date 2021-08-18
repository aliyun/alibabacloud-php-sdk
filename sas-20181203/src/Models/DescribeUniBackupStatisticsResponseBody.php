<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUniBackupStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalRestoreTaskCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $unprotectedDatabaseCount;

    /**
     * @var int
     */
    public $restoringTaskCount;

    /**
     * @var int
     */
    public $protectedDatabaseCount;

    /**
     * @var int
     */
    public $totalRecoverableCount;
    protected $_name = [
        'totalRestoreTaskCount'    => 'TotalRestoreTaskCount',
        'requestId'                => 'RequestId',
        'unprotectedDatabaseCount' => 'UnprotectedDatabaseCount',
        'restoringTaskCount'       => 'RestoringTaskCount',
        'protectedDatabaseCount'   => 'ProtectedDatabaseCount',
        'totalRecoverableCount'    => 'TotalRecoverableCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalRestoreTaskCount) {
            $res['TotalRestoreTaskCount'] = $this->totalRestoreTaskCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unprotectedDatabaseCount) {
            $res['UnprotectedDatabaseCount'] = $this->unprotectedDatabaseCount;
        }
        if (null !== $this->restoringTaskCount) {
            $res['RestoringTaskCount'] = $this->restoringTaskCount;
        }
        if (null !== $this->protectedDatabaseCount) {
            $res['ProtectedDatabaseCount'] = $this->protectedDatabaseCount;
        }
        if (null !== $this->totalRecoverableCount) {
            $res['TotalRecoverableCount'] = $this->totalRecoverableCount;
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
        if (isset($map['TotalRestoreTaskCount'])) {
            $model->totalRestoreTaskCount = $map['TotalRestoreTaskCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnprotectedDatabaseCount'])) {
            $model->unprotectedDatabaseCount = $map['UnprotectedDatabaseCount'];
        }
        if (isset($map['RestoringTaskCount'])) {
            $model->restoringTaskCount = $map['RestoringTaskCount'];
        }
        if (isset($map['ProtectedDatabaseCount'])) {
            $model->protectedDatabaseCount = $map['ProtectedDatabaseCount'];
        }
        if (isset($map['TotalRecoverableCount'])) {
            $model->totalRecoverableCount = $map['TotalRecoverableCount'];
        }

        return $model;
    }
}
