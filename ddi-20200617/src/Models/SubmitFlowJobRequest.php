<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class SubmitFlowJobRequest extends Model
{
    /**
     * @description 集群ID。您可以调用ListClusters查看集群的ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 配置参数信息：{"key1":"value1"}。key为params的参数值会覆盖实际作业中运行的内容。
     *
     * @var string
     */
    public $conf;

    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 作业ID。您可以调用ListFlowJob查看作业ID。
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 项目ID。您可以调用ListFlowProject查看项目的ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'conf'      => 'Conf',
        'hostName'  => 'HostName',
        'jobId'     => 'JobId',
        'projectId' => 'ProjectId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitFlowJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
