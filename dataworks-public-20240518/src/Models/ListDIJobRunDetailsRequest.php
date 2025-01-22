<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDIJobRunDetailsRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sourceDataSourceName;
    /**
     * @var string
     */
    public $sourceDatabaseName;
    /**
     * @var string
     */
    public $sourceSchemaName;
    /**
     * @var string
     */
    public $sourceTableName;
    protected $_name = [
        'DIJobId'              => 'DIJobId',
        'instanceId'           => 'InstanceId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'sourceDataSourceName' => 'SourceDataSourceName',
        'sourceDatabaseName'   => 'SourceDatabaseName',
        'sourceSchemaName'     => 'SourceSchemaName',
        'sourceTableName'      => 'SourceTableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sourceDataSourceName) {
            $res['SourceDataSourceName'] = $this->sourceDataSourceName;
        }

        if (null !== $this->sourceDatabaseName) {
            $res['SourceDatabaseName'] = $this->sourceDatabaseName;
        }

        if (null !== $this->sourceSchemaName) {
            $res['SourceSchemaName'] = $this->sourceSchemaName;
        }

        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SourceDataSourceName'])) {
            $model->sourceDataSourceName = $map['SourceDataSourceName'];
        }

        if (isset($map['SourceDatabaseName'])) {
            $model->sourceDatabaseName = $map['SourceDatabaseName'];
        }

        if (isset($map['SourceSchemaName'])) {
            $model->sourceSchemaName = $map['SourceSchemaName'];
        }

        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        return $model;
    }
}
