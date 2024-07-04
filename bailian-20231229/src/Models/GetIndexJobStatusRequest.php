<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class GetIndexJobStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;

    /**
     * @description This parameter is required.
     *
     * @example 20230718xxxx-146c93bf
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'indexId' => 'IndexId',
        'jobId'   => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
