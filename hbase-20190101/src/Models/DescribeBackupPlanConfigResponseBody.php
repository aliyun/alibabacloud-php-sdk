<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupPlanConfigResponseBody\tables;

class DescribeBackupPlanConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $fullBackupCycle;

    /**
     * @var int
     */
    public $minHFileBackupCount;

    /**
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tables
     */
    public $tables;
    protected $_name = [
        'fullBackupCycle' => 'FullBackupCycle',
        'minHFileBackupCount' => 'MinHFileBackupCount',
        'nextFullBackupDate' => 'NextFullBackupDate',
        'requestId' => 'RequestId',
        'tables' => 'Tables',
    ];

    public function validate()
    {
        if (null !== $this->tables) {
            $this->tables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tables'] = null !== $this->tables ? $this->tables->toArray($noStream) : $this->tables;
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
