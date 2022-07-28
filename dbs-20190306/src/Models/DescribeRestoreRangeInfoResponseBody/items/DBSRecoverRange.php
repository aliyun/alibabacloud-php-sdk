<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange\fullBackupList;
use AlibabaCloud\Tea\Model;

class DBSRecoverRange extends Model
{
    /**
     * @var int
     */
    public $beginTimestampForRestore;

    /**
     * @var int
     */
    public $endTimestampForRestore;

    /**
     * @var fullBackupList
     */
    public $fullBackupList;

    /**
     * @var string
     */
    public $rangeType;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;
    protected $_name = [
        'beginTimestampForRestore'   => 'BeginTimestampForRestore',
        'endTimestampForRestore'     => 'EndTimestampForRestore',
        'fullBackupList'             => 'FullBackupList',
        'rangeType'                  => 'RangeType',
        'sourceEndpointInstanceID'   => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType' => 'SourceEndpointInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTimestampForRestore) {
            $res['BeginTimestampForRestore'] = $this->beginTimestampForRestore;
        }
        if (null !== $this->endTimestampForRestore) {
            $res['EndTimestampForRestore'] = $this->endTimestampForRestore;
        }
        if (null !== $this->fullBackupList) {
            $res['FullBackupList'] = null !== $this->fullBackupList ? $this->fullBackupList->toMap() : null;
        }
        if (null !== $this->rangeType) {
            $res['RangeType'] = $this->rangeType;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBSRecoverRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTimestampForRestore'])) {
            $model->beginTimestampForRestore = $map['BeginTimestampForRestore'];
        }
        if (isset($map['EndTimestampForRestore'])) {
            $model->endTimestampForRestore = $map['EndTimestampForRestore'];
        }
        if (isset($map['FullBackupList'])) {
            $model->fullBackupList = fullBackupList::fromMap($map['FullBackupList']);
        }
        if (isset($map['RangeType'])) {
            $model->rangeType = $map['RangeType'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }

        return $model;
    }
}
