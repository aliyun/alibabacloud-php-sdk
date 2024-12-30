<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList\outputLineageList\columnList;
use AlibabaCloud\Tea\Model;

class outputLineageList extends Model
{
    /**
     * @example 103111231
     *
     * @var string
     */
    public $bizUnitId;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $bizUnitName;

    /**
     * @var columnList[]
     */
    public $columnList;

    /**
     * @example test xx
     *
     * @var string
     */
    public $description;

    /**
     * @example t_input
     *
     * @var string
     */
    public $displayName;

    /**
     * @example dev
     *
     * @var string
     */
    public $env;

    /**
     * @var bool
     */
    public $fullTable;

    /**
     * @example Guid_101121
     *
     * @var string
     */
    public $guid;

    /**
     * @example t_input
     *
     * @var string
     */
    public $name;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 20112101
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example 131211211
     *
     * @var string
     */
    public $projectId;

    /**
     * @example prj_test
     *
     * @var string
     */
    public $projectName;

    /**
     * @example dim
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'bizUnitId'   => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'columnList'  => 'ColumnList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env'         => 'Env',
        'fullTable'   => 'FullTable',
        'guid'        => 'Guid',
        'name'        => 'Name',
        'ownerName'   => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
        'subType'     => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }
        if (null !== $this->columnList) {
            $res['ColumnList'] = [];
            if (null !== $this->columnList && \is_array($this->columnList)) {
                $n = 0;
                foreach ($this->columnList as $item) {
                    $res['ColumnList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return outputLineageList
     */
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
                $n                 = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? columnList::fromMap($item) : $item;
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
