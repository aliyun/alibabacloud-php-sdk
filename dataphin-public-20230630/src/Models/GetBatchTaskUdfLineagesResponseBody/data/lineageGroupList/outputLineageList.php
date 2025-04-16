<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList\outputLineageList\columnList;

class outputLineageList extends Model
{
    /**
     * @var string
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var columnList[]
     */
    public $columnList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $env;

    /**
     * @var bool
     */
    public $fullTable;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $subType;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'columnList' => 'ColumnList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'fullTable' => 'FullTable',
        'guid' => 'Guid',
        'name' => 'Name',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'subType' => 'SubType',
    ];

    public function validate()
    {
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->columnList) {
            if (\is_array($this->columnList)) {
                $res['ColumnList'] = [];
                $n1 = 0;
                foreach ($this->columnList as $item1) {
                    $res['ColumnList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->fullTable) {
            $res['FullTable'] = $this->fullTable;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n1 = 0;
                foreach ($map['ColumnList'] as $item1) {
                    $model->columnList[$n1++] = columnList::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['FullTable'])) {
            $model->fullTable = $map['FullTable'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
