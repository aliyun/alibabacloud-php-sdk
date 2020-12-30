<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DumpMetaDataSourceForOuterRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $dumpAllDatabase;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var bool
     */
    public $dumpAllTable;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var bool
     */
    public $dumpAllPartition;

    /**
     * @var int
     */
    public $dumpLimit;

    /**
     * @var string[]
     */
    public $partitionValues;
    protected $_name = [
        'resourceOwnerId'  => 'ResourceOwnerId',
        'regionId'         => 'RegionId',
        'clusterId'        => 'ClusterId',
        'dumpAllDatabase'  => 'DumpAllDatabase',
        'databaseId'       => 'DatabaseId',
        'dumpAllTable'     => 'DumpAllTable',
        'tableId'          => 'TableId',
        'dumpAllPartition' => 'DumpAllPartition',
        'dumpLimit'        => 'DumpLimit',
        'partitionValues'  => 'PartitionValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dumpAllDatabase) {
            $res['DumpAllDatabase'] = $this->dumpAllDatabase;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->dumpAllTable) {
            $res['DumpAllTable'] = $this->dumpAllTable;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->dumpAllPartition) {
            $res['DumpAllPartition'] = $this->dumpAllPartition;
        }
        if (null !== $this->dumpLimit) {
            $res['DumpLimit'] = $this->dumpLimit;
        }
        if (null !== $this->partitionValues) {
            $res['PartitionValues'] = $this->partitionValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DumpMetaDataSourceForOuterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DumpAllDatabase'])) {
            $model->dumpAllDatabase = $map['DumpAllDatabase'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DumpAllTable'])) {
            $model->dumpAllTable = $map['DumpAllTable'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['DumpAllPartition'])) {
            $model->dumpAllPartition = $map['DumpAllPartition'];
        }
        if (isset($map['DumpLimit'])) {
            $model->dumpLimit = $map['DumpLimit'];
        }
        if (isset($map['PartitionValues'])) {
            if (!empty($map['PartitionValues'])) {
                $model->partitionValues = $map['PartitionValues'];
            }
        }

        return $model;
    }
}
