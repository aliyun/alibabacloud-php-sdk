<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class CancelSparkStatementRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example j202106071620hangzhou****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example 2026****
     *
     * @var string
     */
    public $statementId;
    protected $_name = [
        'jobId'       => 'JobId',
        'statementId' => 'StatementId',
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
        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelSparkStatementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        return $model;
    }
}
