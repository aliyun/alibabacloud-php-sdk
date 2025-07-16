<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class CatalogSummary extends Model
{
    /**
     * @var int
     */
    public $apiVisitCountMonthly;

    /**
     * @var MoMValues
     */
    public $databaseCount;

    /**
     * @var int
     */
    public $fileAccessCountMonthly;

    /**
     * @description Update date of the statistics
     *
     * @var string
     */
    public $generatedDate;

    /**
     * @var MoMValues
     */
    public $partitionCount;

    /**
     * @var MoMValues
     */
    public $tableCount;

    /**
     * @var int
     */
    public $throughputMonthly;

    /**
     * @var MoMValues
     */
    public $totalFileCount;

    /**
     * @var MoMValues
     */
    public $totalFileSizeInBytes;
    protected $_name = [
        'apiVisitCountMonthly' => 'apiVisitCountMonthly',
        'databaseCount' => 'databaseCount',
        'fileAccessCountMonthly' => 'fileAccessCountMonthly',
        'generatedDate' => 'generatedDate',
        'partitionCount' => 'partitionCount',
        'tableCount' => 'tableCount',
        'throughputMonthly' => 'throughputMonthly',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVisitCountMonthly) {
            $res['apiVisitCountMonthly'] = $this->apiVisitCountMonthly;
        }
        if (null !== $this->databaseCount) {
            $res['databaseCount'] = null !== $this->databaseCount ? $this->databaseCount->toMap() : null;
        }
        if (null !== $this->fileAccessCountMonthly) {
            $res['fileAccessCountMonthly'] = $this->fileAccessCountMonthly;
        }
        if (null !== $this->generatedDate) {
            $res['generatedDate'] = $this->generatedDate;
        }
        if (null !== $this->partitionCount) {
            $res['partitionCount'] = null !== $this->partitionCount ? $this->partitionCount->toMap() : null;
        }
        if (null !== $this->tableCount) {
            $res['tableCount'] = null !== $this->tableCount ? $this->tableCount->toMap() : null;
        }
        if (null !== $this->throughputMonthly) {
            $res['throughputMonthly'] = $this->throughputMonthly;
        }
        if (null !== $this->totalFileCount) {
            $res['totalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toMap() : null;
        }
        if (null !== $this->totalFileSizeInBytes) {
            $res['totalFileSizeInBytes'] = null !== $this->totalFileSizeInBytes ? $this->totalFileSizeInBytes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiVisitCountMonthly'])) {
            $model->apiVisitCountMonthly = $map['apiVisitCountMonthly'];
        }
        if (isset($map['databaseCount'])) {
            $model->databaseCount = MoMValues::fromMap($map['databaseCount']);
        }
        if (isset($map['fileAccessCountMonthly'])) {
            $model->fileAccessCountMonthly = $map['fileAccessCountMonthly'];
        }
        if (isset($map['generatedDate'])) {
            $model->generatedDate = $map['generatedDate'];
        }
        if (isset($map['partitionCount'])) {
            $model->partitionCount = MoMValues::fromMap($map['partitionCount']);
        }
        if (isset($map['tableCount'])) {
            $model->tableCount = MoMValues::fromMap($map['tableCount']);
        }
        if (isset($map['throughputMonthly'])) {
            $model->throughputMonthly = $map['throughputMonthly'];
        }
        if (isset($map['totalFileCount'])) {
            $model->totalFileCount = MoMValues::fromMap($map['totalFileCount']);
        }
        if (isset($map['totalFileSizeInBytes'])) {
            $model->totalFileSizeInBytes = MoMValues::fromMap($map['totalFileSizeInBytes']);
        }

        return $model;
    }
}
