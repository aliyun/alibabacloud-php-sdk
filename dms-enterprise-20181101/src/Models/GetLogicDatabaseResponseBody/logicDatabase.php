<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\databaseIds;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\ownerNameList;

class logicDatabase extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var databaseIds
     */
    public $databaseIds;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $searchName;
    protected $_name = [
        'alias' => 'Alias',
        'databaseId' => 'DatabaseId',
        'databaseIds' => 'DatabaseIds',
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'logic' => 'Logic',
        'ownerIdList' => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'schemaName' => 'SchemaName',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
        if (null !== $this->databaseIds) {
            $this->databaseIds->validate();
        }
        if (null !== $this->ownerIdList) {
            $this->ownerIdList->validate();
        }
        if (null !== $this->ownerNameList) {
            $this->ownerNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = null !== $this->databaseIds ? $this->databaseIds->toArray($noStream) : $this->databaseIds;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toArray($noStream) : $this->ownerIdList;
        }

        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toArray($noStream) : $this->ownerNameList;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        if (isset($map['DatabaseIds'])) {
            $model->databaseIds = databaseIds::fromMap($map['DatabaseIds']);
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
        }

        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
