<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class ListSurveyResourcesDetailRequest extends Model
{
    /**
     * @description ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description 调研任务Id
     *
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description 类型
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $subProjectId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ip'           => 'ip',
        'jobId'        => 'jobId',
        'projectId'    => 'projectId',
        'resourceType' => 'resourceType',
        'subProjectId' => 'subProjectId',
        'regionId'     => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->subProjectId) {
            $res['subProjectId'] = $this->subProjectId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSurveyResourcesDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['subProjectId'])) {
            $model->subProjectId = $map['subProjectId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
