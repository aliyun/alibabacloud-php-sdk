<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The job name.
     *
     * @example TestJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The job configurations.
     *
     * @var string
     */
    public $jobSpecShrink;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'jobName'       => 'JobName',
        'jobSpecShrink' => 'JobSpec',
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
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobSpecShrink) {
            $res['JobSpec'] = $this->jobSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobSpec'])) {
            $model->jobSpecShrink = $map['JobSpec'];
        }

        return $model;
    }
}
