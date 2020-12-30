<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPlanConfigResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeBackupPlanConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $fullBackupCycle;

    /**
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @var tables
     */
    public $tables;

    /**
     * @var int
     */
    public $minHFileBackupCount;
    protected $_name = [
        'requestId'           => 'RequestId',
        'fullBackupCycle'     => 'FullBackupCycle',
        'nextFullBackupDate'  => 'NextFullBackupDate',
        'tables'              => 'Tables',
        'minHFileBackupCount' => 'MinHFileBackupCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->fullBackupCycle) {
            $res['FullBackupCycle'] = $this->fullBackupCycle;
        }
        if (null !== $this->nextFullBackupDate) {
            $res['NextFullBackupDate'] = $this->nextFullBackupDate;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }
        if (null !== $this->minHFileBackupCount) {
            $res['MinHFileBackupCount'] = $this->minHFileBackupCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FullBackupCycle'])) {
            $model->fullBackupCycle = $map['FullBackupCycle'];
        }
        if (isset($map['NextFullBackupDate'])) {
            $model->nextFullBackupDate = $map['NextFullBackupDate'];
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }
        if (isset($map['MinHFileBackupCount'])) {
            $model->minHFileBackupCount = $map['MinHFileBackupCount'];
        }

        return $model;
    }
}
