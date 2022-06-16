<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPodsResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPodsResponseBody\data\deploySteps;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var int
     */
    public $deployOrderId;

    /**
     * @var int
     */
    public $deployPartitionNum;

    /**
     * @var deploySteps[]
     */
    public $deploySteps;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $podIp;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $result;

    /**
     * @var string
     */
    public $resultName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appInstanceId'      => 'AppInstanceId',
        'deployOrderId'      => 'DeployOrderId',
        'deployPartitionNum' => 'DeployPartitionNum',
        'deploySteps'        => 'DeploySteps',
        'groupName'          => 'GroupName',
        'hostIp'             => 'HostIp',
        'hostName'           => 'HostName',
        'podIp'              => 'PodIp',
        'region'             => 'Region',
        'result'             => 'Result',
        'resultName'         => 'ResultName',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'statusName'         => 'StatusName',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }
        if (null !== $this->deployPartitionNum) {
            $res['DeployPartitionNum'] = $this->deployPartitionNum;
        }
        if (null !== $this->deploySteps) {
            $res['DeploySteps'] = [];
            if (null !== $this->deploySteps && \is_array($this->deploySteps)) {
                $n = 0;
                foreach ($this->deploySteps as $item) {
                    $res['DeploySteps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultName) {
            $res['ResultName'] = $this->resultName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }
        if (isset($map['DeployPartitionNum'])) {
            $model->deployPartitionNum = $map['DeployPartitionNum'];
        }
        if (isset($map['DeploySteps'])) {
            if (!empty($map['DeploySteps'])) {
                $model->deploySteps = [];
                $n                  = 0;
                foreach ($map['DeploySteps'] as $item) {
                    $model->deploySteps[$n++] = null !== $item ? deploySteps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ResultName'])) {
            $model->resultName = $map['ResultName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
