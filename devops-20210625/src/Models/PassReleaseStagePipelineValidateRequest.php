<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class PassReleaseStagePipelineValidateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 226241***
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 66c0c9fffeb86b450c199***
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'jobId'          => 'jobId',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PassReleaseStagePipelineValidateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
