<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentJobResourceRequest extends Model
{
    /**
     * @description The ID of the deployment task.
     *
     * This parameter is required.
     *
     * @example 8888
     *
     * @var int
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
    ];

    public function validate() {}

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
     * @return ListDeploymentJobResourceRequest
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
