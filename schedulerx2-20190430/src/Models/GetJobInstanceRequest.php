<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class GetJobInstanceRequest extends Model
{
    /**
     * @description The ID of the application. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the job.
     *
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the job instance.
     *
     * @example 11111111
     *
     * @var int
     */
    public $jobInstanceId;

    /**
     * @description The ID of the namespace. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
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
    protected $_name = [
        'groupId'         => 'GroupId',
        'jobId'           => 'JobId',
        'jobInstanceId'   => 'JobInstanceId',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }

        return $model;
    }
}
