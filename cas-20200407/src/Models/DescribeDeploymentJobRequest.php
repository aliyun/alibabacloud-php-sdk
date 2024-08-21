<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeploymentJobRequest extends Model
{
    /**
     * @description The ID of the deployment job. The **ID** of the job is returned after you call the [CreateDeploymentJob](https://help.aliyun.com/document_detail/2712234.html) operation. You can also call the [ListDeploymentJob](https://help.aliyun.com/document_detail/2712223.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 8888
     *
     * @var int
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeploymentJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
