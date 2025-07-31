<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList\prodDataSourceInfo\configItemList;
use AlibabaCloud\Tea\Model;

class prodDataSourceInfo extends Model
{
    /**
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @example 1708303959000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 212211111
     *
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example PROD
     *
     * @var string
     */
    public $env;

    /**
     * @example 300000028799
     *
     * @var int
     */
    public $id;

    /**
     * @example 1708303959000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 212211111
     *
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @example ALL
     *
     * @var string
     */
    public $scope;

    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configItemList' => 'ConfigItemList',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'description' => 'Description',
        'env' => 'Env',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'scope' => 'Scope',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemList) {
            $res['ConfigItemList'] = [];
            if (null !== $this->configItemList && \is_array($this->configItemList)) {
                $n = 0;
                foreach ($this->configItemList as $item) {
                    $res['ConfigItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prodDataSourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemList'])) {
            if (!empty($map['ConfigItemList'])) {
                $model->configItemList = [];
                $n = 0;
                foreach ($map['ConfigItemList'] as $item) {
                    $model->configItemList[$n++] = null !== $item ? configItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
