<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDataBloatResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 1.03
     *
     * @var string
     */
    public $bloatCeoff;

    /**
     * @example 0.2MB
     *
     * @var string
     */
    public $bloatSize;

    /**
     * @example adbtest
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 1MB
     *
     * @var string
     */
    public $expectTableSize;

    /**
     * @example 1.2MB
     *
     * @var string
     */
    public $realTableSize;

    /**
     * @example schema1
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @example Heap
     *
     * @var string
     */
    public $storageType;

    /**
     * @example null
     *
     * @var string
     */
    public $suggestedAction;

    /**
     * @example tab1
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 2022-08-08T20:00:00Z
     *
     * @var string
     */
    public $timeLastUpdated;

    /**
     * @example 2022-08-08T16:00:00Z
     *
     * @var string
     */
    public $timeLastVacuumed;
    protected $_name = [
        'bloatCeoff'       => 'BloatCeoff',
        'bloatSize'        => 'BloatSize',
        'databaseName'     => 'DatabaseName',
        'expectTableSize'  => 'ExpectTableSize',
        'realTableSize'    => 'RealTableSize',
        'schemaName'       => 'SchemaName',
        'sequence'         => 'Sequence',
        'storageType'      => 'StorageType',
        'suggestedAction'  => 'SuggestedAction',
        'tableName'        => 'TableName',
        'timeLastUpdated'  => 'TimeLastUpdated',
        'timeLastVacuumed' => 'TimeLastVacuumed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bloatCeoff) {
            $res['BloatCeoff'] = $this->bloatCeoff;
        }
        if (null !== $this->bloatSize) {
            $res['BloatSize'] = $this->bloatSize;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->expectTableSize) {
            $res['ExpectTableSize'] = $this->expectTableSize;
        }
        if (null !== $this->realTableSize) {
            $res['RealTableSize'] = $this->realTableSize;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->suggestedAction) {
            $res['SuggestedAction'] = $this->suggestedAction;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->timeLastUpdated) {
            $res['TimeLastUpdated'] = $this->timeLastUpdated;
        }
        if (null !== $this->timeLastVacuumed) {
            $res['TimeLastVacuumed'] = $this->timeLastVacuumed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BloatCeoff'])) {
            $model->bloatCeoff = $map['BloatCeoff'];
        }
        if (isset($map['BloatSize'])) {
            $model->bloatSize = $map['BloatSize'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['ExpectTableSize'])) {
            $model->expectTableSize = $map['ExpectTableSize'];
        }
        if (isset($map['RealTableSize'])) {
            $model->realTableSize = $map['RealTableSize'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SuggestedAction'])) {
            $model->suggestedAction = $map['SuggestedAction'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TimeLastUpdated'])) {
            $model->timeLastUpdated = $map['TimeLastUpdated'];
        }
        if (isset($map['TimeLastVacuumed'])) {
            $model->timeLastVacuumed = $map['TimeLastVacuumed'];
        }

        return $model;
    }
}
