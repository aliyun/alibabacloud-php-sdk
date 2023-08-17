<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody;

use AlibabaCloud\Tea\Model;

class poolsInfo extends Model
{
    /**
     * @description The time when the resource group was created.
     *
     * @example 2022-03-09 16:57:35.241
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of nodes.
     *
     * >  Each node consumes 16 cores and 64 GB memory.
     * @example 2
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The name of the resource group.
     *
     * @example USER_DEFAULT
     *
     * @var string
     */
    public $poolName;

    /**
     * @description The database accounts that are associated with the resource group.
     *
     * @example testb,testc
     *
     * @var string
     */
    public $poolUsers;

    /**
     * @description The mode in which SQL statements are executed.
     *
     *   **batch**
     *   **interactive**
     *
     * >  For more information, see [Query execution modes](~~189502~~).
     * @example default_type
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The time when the resource group was updated.
     *
     * @example 2022-03-09 16:57:35.241
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'nodeNum'    => 'NodeNum',
        'poolName'   => 'PoolName',
        'poolUsers'  => 'PoolUsers',
        'queryType'  => 'QueryType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->poolUsers) {
            $res['PoolUsers'] = $this->poolUsers;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poolsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['PoolUsers'])) {
            $model->poolUsers = $map['PoolUsers'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
