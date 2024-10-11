<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class GetJobAttemptLogRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example j202105272322hangzhou5d64f1560000128-0001
     *
     * @var string
     */
    public $jobAttemptId;

    /**
     * @description This parameter is required.
     *
     * @example j202105272322hangzhou5d64f1560000128
     *
     * @var string
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example release-test
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'jobAttemptId' => 'JobAttemptId',
        'jobId'        => 'JobId',
        'vcName'       => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobAttemptId) {
            $res['JobAttemptId'] = $this->jobAttemptId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobAttemptLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobAttemptId'])) {
            $model->jobAttemptId = $map['JobAttemptId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
