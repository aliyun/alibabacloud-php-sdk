<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource\database;
use AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource\table;
use AlibabaCloud\Tea\Model;

class LifecycleResource extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var database
     */
    public $database;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var DatabaseProfile
     */
    public $databaseProfile;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $lifecycleRuleBizId;

    /**
     * @var int
     */
    public $owner;

    /**
     * @var table
     */
    public $table;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var TableProfile
     */
    public $tableProfile;
    protected $_name = [
        'bizId'              => 'BizId',
        'catalogId'          => 'CatalogId',
        'database'           => 'Database',
        'databaseName'       => 'DatabaseName',
        'databaseProfile'    => 'DatabaseProfile',
        'gmtCreate'          => 'GmtCreate',
        'lifecycleRuleBizId' => 'LifecycleRuleBizId',
        'owner'              => 'Owner',
        'table'              => 'Table',
        'tableName'          => 'TableName',
        'tableProfile'       => 'TableProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toMap() : null;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databaseProfile) {
            $res['DatabaseProfile'] = null !== $this->databaseProfile ? $this->databaseProfile->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->lifecycleRuleBizId) {
            $res['LifecycleRuleBizId'] = $this->lifecycleRuleBizId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableProfile) {
            $res['TableProfile'] = null !== $this->tableProfile ? $this->tableProfile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LifecycleResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['Database'])) {
            $model->database = database::fromMap($map['Database']);
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabaseProfile'])) {
            $model->databaseProfile = DatabaseProfile::fromMap($map['DatabaseProfile']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['LifecycleRuleBizId'])) {
            $model->lifecycleRuleBizId = $map['LifecycleRuleBizId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Table'])) {
            $model->table = table::fromMap($map['Table']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableProfile'])) {
            $model->tableProfile = TableProfile::fromMap($map['TableProfile']);
        }

        return $model;
    }
}
