<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUniBackupStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $protectedDatabaseCount;

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
        'protectedDatabaseCount'   => 'ProtectedDatabaseCount',
        'requestId'                => 'RequestId',
        'restoringTaskCount'       => 'RestoringTaskCount',
        'totalRecoverableCount'    => 'TotalRecoverableCount',
        'totalRestoreTaskCount'    => 'TotalRestoreTaskCount',
        'unprotectedDatabaseCount' => 'UnprotectedDatabaseCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectedDatabaseCount) {
            $res['ProtectedDatabaseCount'] = $this->protectedDatabaseCount;
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
