<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPlanConfigResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlanConfigResponseBody extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $fullBackupCycle;

    /**
     * @example 3
     *
     * @var int
     */
    public $minHFileBackupCount;

    /**
     * @example 2020-11-09T18:00:00Z
     *
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @example 33A23201-6038-4A6A-B76A-61047EA04E6A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tables
     */
    public $tables;
    protected $_name = [
        'fullBackupCycle'     => 'FullBackupCycle',
        'minHFileBackupCount' => 'MinHFileBackupCount',
        'nextFullBackupDate'  => 'NextFullBackupDate',
        'requestId'           => 'RequestId',
        'tables'              => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullBackupCycle) {
            $res['FullBackupCycle'] = $this->fullBackupCycle;
        }
        if (null !== $this->minHFileBackupCount) {
            $res['MinHFileBackupCount'] = $this->minHFileBackupCount;
        }
        if (null !== $this->nextFullBackupDate) {
            $res['NextFullBackupDate'] = $this->nextFullBackupDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPlanConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullBackupCycle'])) {
            $model->fullBackupCycle = $map['FullBackupCycle'];
        }
        if (isset($map['MinHFileBackupCount'])) {
            $model->minHFileBackupCount = $map['MinHFileBackupCount'];
        }
        if (isset($map['NextFullBackupDate'])) {
            $model->nextFullBackupDate = $map['NextFullBackupDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }

        return $model;
    }
}
