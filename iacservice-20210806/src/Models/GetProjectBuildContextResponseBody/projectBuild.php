<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild\jobList;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild\resourceList;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'endTime'         => 'endTime',
        'failCnt'         => 'failCnt',
        'jobList'         => 'jobList',
        'jobTotalCnt'     => 'jobTotalCnt',
        'projectBuildId'  => 'projectBuildId',
        'projectId'       => 'projectId',
        'resourceCnt'     => 'resourceCnt',
        'resourceList'    => 'resourceList',
        'resourceTypeCnt' => 'resourceTypeCnt',
        'status'          => 'status',
        'successCnt'      => 'successCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->failCnt) {
            $res['failCnt'] = $this->failCnt;
        }
        if (null !== $this->jobList) {
            $res['jobList'] = [];
            if (null !== $this->jobList && \is_array($this->jobList)) {
                $n = 0;
                foreach ($this->jobList as $item) {
                    $res['jobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['resourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['resourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectBuild
     */
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
                $n              = 0;
                foreach ($map['jobList'] as $item) {
                    $model->jobList[$n++] = null !== $item ? jobList::fromMap($item) : $item;
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
                $n                   = 0;
                foreach ($map['resourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
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

        return $model;
    }
}
