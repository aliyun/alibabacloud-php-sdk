<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo\standardGroup;

class dbBaseInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $alterTimeout;

    /**
     * @var bool
     */
    public $assetControl;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $clusterNode;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $dbaId;

    /**
     * @var string
     */
    public $dbaName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var bool
     */
    public $follow;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $idc;

    /**
     * @var string
     */
    public $idcTitle;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $lastSyncTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var int[]
     */
    public $ownerIds;

    /**
     * @var string[]
     */
    public $ownerNames;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var standardGroup
     */
    public $standardGroup;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var string
     */
    public $tnsName;

    /**
     * @var string
     */
    public $unitType;
    protected $_name = [
        'alias' => 'Alias',
        'alterTimeout' => 'AlterTimeout',
        'assetControl' => 'AssetControl',
        'catalogName' => 'CatalogName',
        'clusterNode' => 'ClusterNode',
        'dbId' => 'DbId',
        'dbType' => 'DbType',
        'dbaId' => 'DbaId',
        'dbaName' => 'DbaName',
        'description' => 'Description',
        'encoding' => 'Encoding',
        'envType' => 'EnvType',
        'follow' => 'Follow',
        'host' => 'Host',
        'idc' => 'Idc',
        'idcTitle' => 'IdcTitle',
        'instanceId' => 'InstanceId',
        'instanceSource' => 'InstanceSource',
        'lastSyncTime' => 'LastSyncTime',
        'level' => 'Level',
        'logic' => 'Logic',
        'ownerIds' => 'OwnerIds',
        'ownerNames' => 'OwnerNames',
        'port' => 'Port',
        'schemaName' => 'SchemaName',
        'searchName' => 'SearchName',
        'standardGroup' => 'StandardGroup',
        'state' => 'State',
        'tableCount' => 'TableCount',
        'tnsName' => 'TnsName',
        'unitType' => 'UnitType',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        if (\is_array($this->ownerNames)) {
            Model::validateArray($this->ownerNames);
        }
        if (null !== $this->standardGroup) {
            $this->standardGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->alterTimeout) {
            $res['AlterTimeout'] = $this->alterTimeout;
        }

        if (null !== $this->assetControl) {
            $res['AssetControl'] = $this->assetControl;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->clusterNode) {
            $res['ClusterNode'] = $this->clusterNode;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }

        if (null !== $this->dbaName) {
            $res['DbaName'] = $this->dbaName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }

        if (null !== $this->idcTitle) {
            $res['IdcTitle'] = $this->idcTitle;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }

        if (null !== $this->lastSyncTime) {
            $res['LastSyncTime'] = $this->lastSyncTime;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->ownerIds) {
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1 = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerNames) {
            if (\is_array($this->ownerNames)) {
                $res['OwnerNames'] = [];
                $n1 = 0;
                foreach ($this->ownerNames as $item1) {
                    $res['OwnerNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        if (null !== $this->standardGroup) {
            $res['StandardGroup'] = null !== $this->standardGroup ? $this->standardGroup->toArray($noStream) : $this->standardGroup;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }

        if (null !== $this->tnsName) {
            $res['TnsName'] = $this->tnsName;
        }

        if (null !== $this->unitType) {
            $res['UnitType'] = $this->unitType;
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

        if (isset($map['AlterTimeout'])) {
            $model->alterTimeout = $map['AlterTimeout'];
        }

        if (isset($map['AssetControl'])) {
            $model->assetControl = $map['AssetControl'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['ClusterNode'])) {
            $model->clusterNode = $map['ClusterNode'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }

        if (isset($map['DbaName'])) {
            $model->dbaName = $map['DbaName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }

        if (isset($map['IdcTitle'])) {
            $model->idcTitle = $map['IdcTitle'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }

        if (isset($map['LastSyncTime'])) {
            $model->lastSyncTime = $map['LastSyncTime'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = [];
                $n1 = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerNames'])) {
            if (!empty($map['OwnerNames'])) {
                $model->ownerNames = [];
                $n1 = 0;
                foreach ($map['OwnerNames'] as $item1) {
                    $model->ownerNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        if (isset($map['StandardGroup'])) {
            $model->standardGroup = standardGroup::fromMap($map['StandardGroup']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }

        if (isset($map['TnsName'])) {
            $model->tnsName = $map['TnsName'];
        }

        if (isset($map['UnitType'])) {
            $model->unitType = $map['UnitType'];
        }

        return $model;
    }
}
