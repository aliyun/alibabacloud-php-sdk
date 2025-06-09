<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

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
        'generatedDate' => 'generatedDate',
        'partitionCount' => 'partitionCount',
        'tableCount' => 'tableCount',
        'throughputMonthly' => 'throughputMonthly',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
    ];

    public function validate()
    {
        if (null !== $this->databaseCount) {
            $this->databaseCount->validate();
        }
        if (null !== $this->partitionCount) {
            $this->partitionCount->validate();
        }
        if (null !== $this->tableCount) {
            $this->tableCount->validate();
        }
        if (null !== $this->totalFileCount) {
            $this->totalFileCount->validate();
        }
        if (null !== $this->totalFileSizeInBytes) {
            $this->totalFileSizeInBytes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVisitCountMonthly) {
            $res['apiVisitCountMonthly'] = $this->apiVisitCountMonthly;
        }

        if (null !== $this->databaseCount) {
            $res['databaseCount'] = null !== $this->databaseCount ? $this->databaseCount->toArray($noStream) : $this->databaseCount;
        }

        if (null !== $this->generatedDate) {
            $res['generatedDate'] = $this->generatedDate;
        }

        if (null !== $this->partitionCount) {
            $res['partitionCount'] = null !== $this->partitionCount ? $this->partitionCount->toArray($noStream) : $this->partitionCount;
        }

        if (null !== $this->tableCount) {
            $res['tableCount'] = null !== $this->tableCount ? $this->tableCount->toArray($noStream) : $this->tableCount;
        }

        if (null !== $this->throughputMonthly) {
            $res['throughputMonthly'] = $this->throughputMonthly;
        }

        if (null !== $this->totalFileCount) {
            $res['totalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toArray($noStream) : $this->totalFileCount;
        }

        if (null !== $this->totalFileSizeInBytes) {
            $res['totalFileSizeInBytes'] = null !== $this->totalFileSizeInBytes ? $this->totalFileSizeInBytes->toArray($noStream) : $this->totalFileSizeInBytes;
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
        if (isset($map['apiVisitCountMonthly'])) {
            $model->apiVisitCountMonthly = $map['apiVisitCountMonthly'];
        }

        if (isset($map['databaseCount'])) {
            $model->databaseCount = MoMValues::fromMap($map['databaseCount']);
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
