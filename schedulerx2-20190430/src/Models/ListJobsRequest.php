<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @description The ID of the application. You can obtain the application ID on the **Application Management** page in the SchedulerX console.
     *
     * @example DocTest.Group
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the job.
     *
     * @example helloword
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The ID of the namespace. You can obtain the namespace ID on the **Namespace** page in the SchedulerX console.
     *
     * @example 1a72ecb1-b4cc-400a-a71b-20cdec9b****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The ID of the region in which the job resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable the job. Valid values:
     *
     *   **0**: disables the job.
     *   **1**: enables the job.
     *
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'groupId'         => 'GroupId',
        'jobName'         => 'JobName',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
