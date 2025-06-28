<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;

class groupsInfo extends Model
{
    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $elasticMinComputeResource;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var mixed[]
     */
    public $engineParams;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string[]
     */
    public $groupUserList;

    /**
     * @var string
     */
    public $groupUsers;

    /**
     * @var int
     */
    public $maxClusterCount;

    /**
     * @var string
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $minClusterCount;

    /**
     * @var string
     */
    public $minComputeResource;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $runningClusterCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterMode' => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'connectionString' => 'ConnectionString',
        'createTime' => 'CreateTime',
        'elasticMinComputeResource' => 'ElasticMinComputeResource',
        'engine' => 'Engine',
        'engineParams' => 'EngineParams',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'groupUserList' => 'GroupUserList',
        'groupUsers' => 'GroupUsers',
        'maxClusterCount' => 'MaxClusterCount',
        'maxComputeResource' => 'MaxComputeResource',
        'minClusterCount' => 'MinClusterCount',
        'minComputeResource' => 'MinComputeResource',
        'nodeNum' => 'NodeNum',
        'port' => 'Port',
        'runningClusterCount' => 'RunningClusterCount',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->engineParams)) {
            Model::validateArray($this->engineParams);
        }
        if (\is_array($this->groupUserList)) {
            Model::validateArray($this->groupUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->elasticMinComputeResource) {
            $res['ElasticMinComputeResource'] = $this->elasticMinComputeResource;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineParams) {
            if (\is_array($this->engineParams)) {
                $res['EngineParams'] = [];
                foreach ($this->engineParams as $key1 => $value1) {
                    $res['EngineParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->groupUserList) {
            if (\is_array($this->groupUserList)) {
                $res['GroupUserList'] = [];
                $n1 = 0;
                foreach ($this->groupUserList as $item1) {
                    $res['GroupUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupUsers) {
            $res['GroupUsers'] = $this->groupUsers;
        }

        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }

        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }

        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }

        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->runningClusterCount) {
            $res['RunningClusterCount'] = $this->runningClusterCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ElasticMinComputeResource'])) {
            $model->elasticMinComputeResource = $map['ElasticMinComputeResource'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineParams'])) {
            if (!empty($map['EngineParams'])) {
                $model->engineParams = [];
                foreach ($map['EngineParams'] as $key1 => $value1) {
                    $model->engineParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['GroupUserList'])) {
            if (!empty($map['GroupUserList'])) {
                $model->groupUserList = [];
                $n1 = 0;
                foreach ($map['GroupUserList'] as $item1) {
                    $model->groupUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupUsers'])) {
            $model->groupUsers = $map['GroupUsers'];
        }

        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }

        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }

        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }

        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RunningClusterCount'])) {
            $model->runningClusterCount = $map['RunningClusterCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
