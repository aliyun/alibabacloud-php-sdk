<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class SubmitFlowJobRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobInstanceId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $conf;
    protected $_name = [
        'regionId'      => 'RegionId',
        'projectId'     => 'ProjectId',
        'jobId'         => 'JobId',
        'jobInstanceId' => 'JobInstanceId',
        'clusterId'     => 'ClusterId',
        'hostName'      => 'HostName',
        'namespace'     => 'Namespace',
        'conf'          => 'Conf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }

        return $model;
    }
}
