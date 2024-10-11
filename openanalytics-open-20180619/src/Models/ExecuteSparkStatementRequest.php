<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class ExecuteSparkStatementRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example print(2+2)\\n
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example j202106071620hangzhou****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example sql
     *
     * @var string
     */
    public $kind;
    protected $_name = [
        'code'  => 'Code',
        'jobId' => 'JobId',
        'kind'  => 'Kind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteSparkStatementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        return $model;
    }
}
