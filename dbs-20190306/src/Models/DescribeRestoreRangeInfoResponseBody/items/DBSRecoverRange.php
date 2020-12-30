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
    public $endTimestampForRestore;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var fullBackupList
     */
    public $fullBackupList;

    /**
     * @var string
     */
    public $rangeType;

    /**
     * @var int
     */
    public $beginTimestampForRestore;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;
    protected $_name = [
        'endTimestampForRestore'     => 'EndTimestampForRestore',
        'sourceEndpointInstanceType' => 'SourceEndpointInstanceType',
        'fullBackupList'             => 'FullBackupList',
        'rangeType'                  => 'RangeType',
        'beginTimestampForRestore'   => 'BeginTimestampForRestore',
        'sourceEndpointInstanceID'   => 'SourceEndpointInstanceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestampForRestore) {
            $res['EndTimestampForRestore'] = $this->endTimestampForRestore;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->fullBackupList) {
            $res['FullBackupList'] = null !== $this->fullBackupList ? $this->fullBackupList->toMap() : null;
        }
        if (null !== $this->rangeType) {
            $res['RangeType'] = $this->rangeType;
        }
        if (null !== $this->beginTimestampForRestore) {
            $res['BeginTimestampForRestore'] = $this->beginTimestampForRestore;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
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
        if (isset($map['EndTimestampForRestore'])) {
            $model->endTimestampForRestore = $map['EndTimestampForRestore'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['FullBackupList'])) {
            $model->fullBackupList = fullBackupList::fromMap($map['FullBackupList']);
        }
        if (isset($map['RangeType'])) {
            $model->rangeType = $map['RangeType'];
        }
        if (isset($map['BeginTimestampForRestore'])) {
            $model->beginTimestampForRestore = $map['BeginTimestampForRestore'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }

        return $model;
    }
}
