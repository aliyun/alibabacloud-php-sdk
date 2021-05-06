<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody;

use AlibabaCloud\Tea\Model;

class poolsInfo extends Model
{
    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $poolUsers;

    /**
     * @var int
     */
    public $nodeNum;
    protected $_name = [
        'queryType'  => 'QueryType',
        'updateTime' => 'UpdateTime',
        'poolName'   => 'PoolName',
        'createTime' => 'CreateTime',
        'poolUsers'  => 'PoolUsers',
        'nodeNum'    => 'NodeNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->poolUsers) {
            $res['PoolUsers'] = $this->poolUsers;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
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
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PoolUsers'])) {
            $model->poolUsers = $map['PoolUsers'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}
