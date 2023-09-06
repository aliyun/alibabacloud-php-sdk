<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;

use AlibabaCloud\Tea\Model;

class dependsOn extends Model
{
    /**
     * @description The ID of the dependent job.
     *
     * @example 10
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The type of the dependency. Valid values:
     *
     *   AfterSucceeded: **All subtasks** of the array job or the dependent job are successfully run. The exit code is 0.
     *   AfterFailed: **Any subtask** of the array job or the dependent job fails. The exit code is not 0.
     *   AfterAny: The dependent job completes.
     *   AfterCorresponding: The subtasks of the array job is successfully run. The exit code is 0.
     *
     * Default value: AfterSucceeded.
     * @example AfterAny
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'jobId' => 'JobId',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependsOn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
