<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest\tag;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest\unitNode;
use AlibabaCloud\Tea\Model;

class CreateGADInstanceRequest extends Model
{
    /**
     * @description The ID of the primary instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of instance. The primary instance serves as the central node of the global active database cluster.
     *
     * >
     *
     *   A primary instance can serve as the central node only of a single global active database cluster.
     *
     *   Only a primary instance that is created in one of the following regions can serve as the central node of a global active database cluster: China (Hangzhou), China (Shanghai), China (Qingdao), China (Beijing), China (Zhangjiakou), China (Shenzhen), and China (Chengdu).
     *
     * @example rm-uf6wjk5*******
     *
     * @var string
     */
    public $centralDBInstanceId;

    /**
     * @description The username of the privileged account of the central node. You can call the [DescribeAccounts](~~26265~~) operation to query the privileged account of the central node.
     *
     * @example test
     *
     * @var string
     */
    public $centralRdsDtsAdminAccount;

    /**
     * @description The password of the privileged account of the central node.
     *
     * @example Test12345
     *
     * @var string
     */
    public $centralRdsDtsAdminPassword;

    /**
     * @description The region ID of the central node. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $centralRegionId;

    /**
     * @description A JSON array that consists of the information about a specified database on the central node. All database information that you specify in this array is synchronized to the unit nodes of the global active database cluster. The JSON array contains the following fields:
     *
     *   **name**: the name of the database.
     *   **all**: specifies whether to synchronize all data in the database or the table. Valid values: **true** and **false**.
     *   **Table**: the name of the table. If you set the **all** field to **false**, you must nest the name of the table that you want to synchronize into the JSON array.
     *
     * Example: `{ "testdb": { "name": "testdb", "all": false, "Table": { "order": { "name": "order", "all": true }, "ordernew": { "name": "ordernew", "all": true } } } }`
     * @example {    "testdb": {     "name": "testdb",     "all": false,     "Table": {       "order": {         "name": "order",         "all": true       },       "ordernew": {         "name": "ordernew",         "all": true       }     }   } }
     *
     * @var string
     */
    public $DBList;

    /**
     * @description The name of the global active database cluster.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description An array that consists of the details about the tag.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description An array that consists of the details about the unit node.
     *
     * @var unitNode[]
     */
    public $unitNode;
    protected $_name = [
        'centralDBInstanceId'        => 'CentralDBInstanceId',
        'centralRdsDtsAdminAccount'  => 'CentralRdsDtsAdminAccount',
        'centralRdsDtsAdminPassword' => 'CentralRdsDtsAdminPassword',
        'centralRegionId'            => 'CentralRegionId',
        'DBList'                     => 'DBList',
        'description'                => 'Description',
        'resourceGroupId'            => 'ResourceGroupId',
        'tag'                        => 'Tag',
        'unitNode'                   => 'UnitNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->centralDBInstanceId) {
            $res['CentralDBInstanceId'] = $this->centralDBInstanceId;
        }
        if (null !== $this->centralRdsDtsAdminAccount) {
            $res['CentralRdsDtsAdminAccount'] = $this->centralRdsDtsAdminAccount;
        }
        if (null !== $this->centralRdsDtsAdminPassword) {
            $res['CentralRdsDtsAdminPassword'] = $this->centralRdsDtsAdminPassword;
        }
        if (null !== $this->centralRegionId) {
            $res['CentralRegionId'] = $this->centralRegionId;
        }
        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unitNode) {
            $res['UnitNode'] = [];
            if (null !== $this->unitNode && \is_array($this->unitNode)) {
                $n = 0;
                foreach ($this->unitNode as $item) {
                    $res['UnitNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGADInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CentralDBInstanceId'])) {
            $model->centralDBInstanceId = $map['CentralDBInstanceId'];
        }
        if (isset($map['CentralRdsDtsAdminAccount'])) {
            $model->centralRdsDtsAdminAccount = $map['CentralRdsDtsAdminAccount'];
        }
        if (isset($map['CentralRdsDtsAdminPassword'])) {
            $model->centralRdsDtsAdminPassword = $map['CentralRdsDtsAdminPassword'];
        }
        if (isset($map['CentralRegionId'])) {
            $model->centralRegionId = $map['CentralRegionId'];
        }
        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnitNode'])) {
            if (!empty($map['UnitNode'])) {
                $model->unitNode = [];
                $n               = 0;
                foreach ($map['UnitNode'] as $item) {
                    $model->unitNode[$n++] = null !== $item ? unitNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
