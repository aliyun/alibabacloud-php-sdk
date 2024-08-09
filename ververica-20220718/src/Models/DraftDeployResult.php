<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DraftDeployResult extends Model
{
    /**
     * @var ValidateStatementResult
     */
    public $artifactValidationDetail;

    /**
     * @example 58718c99-3b29-4c5e-93bb-c9fc4ec6****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'artifactValidationDetail' => 'artifactValidationDetail',
        'deploymentId'             => 'deploymentId',
        'message'                  => 'message',
        'success'                  => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactValidationDetail) {
            $res['artifactValidationDetail'] = null !== $this->artifactValidationDetail ? $this->artifactValidationDetail->toMap() : null;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DraftDeployResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['artifactValidationDetail'])) {
            $model->artifactValidationDetail = ValidateStatementResult::fromMap($map['artifactValidationDetail']);
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
