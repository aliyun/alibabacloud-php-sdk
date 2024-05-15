<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeCacheAnalysisJobRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the cache analysis task. You can obtain the task ID from the response parameters of the [CreateCacheAnalysisJob](https://help.aliyun.com/document_detail/180982.html) operation.
     *
     * This parameter is required.
     * @example sf79-sd99-sa37-****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobId'      => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCacheAnalysisJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
