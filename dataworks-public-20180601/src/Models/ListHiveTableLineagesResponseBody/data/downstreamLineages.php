<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveTableLineagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class downstreamLineages extends Model
{
    /**
     * @example C-D033DD5FB82436A6
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2020-01-09 18:16:15
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
     * @example mr
     *
     * @var string
     */
    public $engine;

    /**
     * @example job_1234567055_0006
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 2020-01-09 18:16:37
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example create table parquet_example_0407 select id as one,name as two,salary as three  from PTtable_0407_emr
     *
     * @var string
     */
    public $queryText;

    /**
     * @example HIVE
     *
     * @var string
     */
    public $source;

    /**
     * @example pt_table_090901_emr_orc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'createTime'   => 'CreateTime',
        'databaseName' => 'DatabaseName',
        'engine'       => 'Engine',
        'jobId'        => 'JobId',
        'modifiedTime' => 'ModifiedTime',
        'queryText'    => 'QueryText',
        'source'       => 'Source',
        'tableName'    => 'TableName',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
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
     * @return downstreamLineages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
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
