<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild\jobList;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild\resourceList;

class projectBuild extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $failCnt;

    /**
     * @var jobList[]
     */
    public $jobList;

    /**
     * @var int
     */
    public $jobTotalCnt;

    /**
     * @var string
     */
    public $projectBuildId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $resourceCnt;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var int
     */
    public $resourceTypeCnt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successCnt;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'endTime' => 'endTime',
        'failCnt' => 'failCnt',
        'jobList' => 'jobList',
        'jobTotalCnt' => 'jobTotalCnt',
        'projectBuildId' => 'projectBuildId',
        'projectId' => 'projectId',
        'resourceCnt' => 'resourceCnt',
        'resourceList' => 'resourceList',
        'resourceTypeCnt' => 'resourceTypeCnt',
        'status' => 'status',
        'successCnt' => 'successCnt',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'triggerStrategy' => 'triggerStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->jobList)) {
            Model::validateArray($this->jobList);
        }
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->failCnt) {
            $res['failCnt'] = $this->failCnt;
        }

        if (null !== $this->jobList) {
            if (\is_array($this->jobList)) {
                $res['jobList'] = [];
                $n1 = 0;
                foreach ($this->jobList as $item1) {
                    $res['jobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->jobTotalCnt) {
            $res['jobTotalCnt'] = $this->jobTotalCnt;
        }

        if (null !== $this->projectBuildId) {
            $res['projectBuildId'] = $this->projectBuildId;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->resourceCnt) {
            $res['resourceCnt'] = $this->resourceCnt;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['resourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['resourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceTypeCnt) {
            $res['resourceTypeCnt'] = $this->resourceTypeCnt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->successCnt) {
            $res['successCnt'] = $this->successCnt;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['failCnt'])) {
            $model->failCnt = $map['failCnt'];
        }

        if (isset($map['jobList'])) {
            if (!empty($map['jobList'])) {
                $model->jobList = [];
                $n1 = 0;
                foreach ($map['jobList'] as $item1) {
                    $model->jobList[$n1++] = jobList::fromMap($item1);
                }
            }
        }

        if (isset($map['jobTotalCnt'])) {
            $model->jobTotalCnt = $map['jobTotalCnt'];
        }

        if (isset($map['projectBuildId'])) {
            $model->projectBuildId = $map['projectBuildId'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['resourceCnt'])) {
            $model->resourceCnt = $map['resourceCnt'];
        }

        if (isset($map['resourceList'])) {
            if (!empty($map['resourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['resourceList'] as $item1) {
                    $model->resourceList[$n1++] = resourceList::fromMap($item1);
                }
            }
        }

        if (isset($map['resourceTypeCnt'])) {
            $model->resourceTypeCnt = $map['resourceTypeCnt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['successCnt'])) {
            $model->successCnt = $map['successCnt'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
