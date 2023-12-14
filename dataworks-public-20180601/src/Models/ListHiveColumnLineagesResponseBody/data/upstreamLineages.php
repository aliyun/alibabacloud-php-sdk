<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class upstreamLineages extends Model
{
    /**
     * @example C-D033DD5FB82436A6
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example balance
     *
     * @var string
     */
    public $columnName;

    /**
     * @example 2019-11-10 11:33:51
     *
     * @var string
     */
    public $createTime;

    /**
     * @example default
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 1
     *
     * @var int
     */
    public $directDownColumnNumber;

    /**
     * @example 0
     *
     * @var int
     */
    public $directDownTableNumber;

    /**
     * @example 2
     *
     * @var int
     */
    public $directUpperColumnNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $directUpperTableNumber;

    /**
     * @example 2019-11-10 11:33:51
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example HIVE
     *
     * @var string
     */
    public $source;

    /**
     * @example pt_table_090901_emr_child
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'columnName'              => 'ColumnName',
        'createTime'              => 'CreateTime',
        'databaseName'            => 'DatabaseName',
        'directDownColumnNumber'  => 'DirectDownColumnNumber',
        'directDownTableNumber'   => 'DirectDownTableNumber',
        'directUpperColumnNumber' => 'DirectUpperColumnNumber',
        'directUpperTableNumber'  => 'DirectUpperTableNumber',
        'modifiedTime'            => 'ModifiedTime',
        'source'                  => 'Source',
        'tableName'               => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->directDownColumnNumber) {
            $res['DirectDownColumnNumber'] = $this->directDownColumnNumber;
        }
        if (null !== $this->directDownTableNumber) {
            $res['DirectDownTableNumber'] = $this->directDownTableNumber;
        }
        if (null !== $this->directUpperColumnNumber) {
            $res['DirectUpperColumnNumber'] = $this->directUpperColumnNumber;
        }
        if (null !== $this->directUpperTableNumber) {
            $res['DirectUpperTableNumber'] = $this->directUpperTableNumber;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upstreamLineages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DirectDownColumnNumber'])) {
            $model->directDownColumnNumber = $map['DirectDownColumnNumber'];
        }
        if (isset($map['DirectDownTableNumber'])) {
            $model->directDownTableNumber = $map['DirectDownTableNumber'];
        }
        if (isset($map['DirectUpperColumnNumber'])) {
            $model->directUpperColumnNumber = $map['DirectUpperColumnNumber'];
        }
        if (isset($map['DirectUpperTableNumber'])) {
            $model->directUpperTableNumber = $map['DirectUpperTableNumber'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
