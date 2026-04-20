<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskAttributeResponseBody\dataSets;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskAttributeResponseBody\taskInfo;

class DescribeAIDBClusterTaskAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessInfo;

    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBClusterStatusDesc;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var dataSets[]
     */
    public $dataSets;

    /**
     * @var mixed[][]
     */
    public $extraInfo;

    /**
     * @var int
     */
    public $kindCode;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskInfo[]
     */
    public $taskInfo;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'accessInfo' => 'AccessInfo',
        'clusterNetworkType' => 'ClusterNetworkType',
        'createTime' => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBClusterStatusDesc' => 'DBClusterStatusDesc',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'dataSets' => 'DataSets',
        'extraInfo' => 'ExtraInfo',
        'kindCode' => 'KindCode',
        'lockMode' => 'LockMode',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'modelPath' => 'ModelPath',
        'requestId' => 'RequestId',
        'taskInfo' => 'TaskInfo',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSets)) {
            Model::validateArray($this->dataSets);
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->taskInfo)) {
            Model::validateArray($this->taskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInfo) {
            $res['AccessInfo'] = $this->accessInfo;
        }

        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }

        if (null !== $this->DBClusterStatusDesc) {
            $res['DBClusterStatusDesc'] = $this->DBClusterStatusDesc;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->dataSets) {
            if (\is_array($this->dataSets)) {
                $res['DataSets'] = [];
                $n1 = 0;
                foreach ($this->dataSets as $item1) {
                    $res['DataSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                $n1 = 0;
                foreach ($this->extraInfo as $item1) {
                    if (\is_array($item1)) {
                        $res['ExtraInfo'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ExtraInfo'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }

        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }

        if (null !== $this->modelPath) {
            $res['ModelPath'] = $this->modelPath;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskInfo) {
            if (\is_array($this->taskInfo)) {
                $res['TaskInfo'] = [];
                $n1 = 0;
                foreach ($this->taskInfo as $item1) {
                    $res['TaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AccessInfo'])) {
            $model->accessInfo = $map['AccessInfo'];
        }

        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }

        if (isset($map['DBClusterStatusDesc'])) {
            $model->DBClusterStatusDesc = $map['DBClusterStatusDesc'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['DataSets'])) {
            if (!empty($map['DataSets'])) {
                $model->dataSets = [];
                $n1 = 0;
                foreach ($map['DataSets'] as $item1) {
                    $model->dataSets[$n1] = dataSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                $n1 = 0;
                foreach ($map['ExtraInfo'] as $item1) {
                    if (!empty($item1)) {
                        $model->extraInfo[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->extraInfo[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }

        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }

        if (isset($map['ModelPath'])) {
            $model->modelPath = $map['ModelPath'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskInfo'])) {
            if (!empty($map['TaskInfo'])) {
                $model->taskInfo = [];
                $n1 = 0;
                foreach ($map['TaskInfo'] as $item1) {
                    $model->taskInfo[$n1] = taskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
