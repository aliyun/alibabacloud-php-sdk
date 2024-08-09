<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class AsyncDraftDeployResult extends Model
{
    /**
     * @var ValidateStatementResult
     */
    public $artifactValidationDetail;

    /**
     * @example CBC799F0-AS7S-1D30-8A4F-882ED4DD****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example "Validation error: SQL validate failed"
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

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'artifactValidationDetail' => 'artifactValidationDetail',
        'deploymentId'             => 'deploymentId',
        'message'                  => 'message',
        'success'                  => 'success',
        'ticketStatus'             => 'ticketStatus',
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
        if (null !== $this->ticketStatus) {
            $res['ticketStatus'] = $this->ticketStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncDraftDeployResult
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
        if (isset($map['ticketStatus'])) {
            $model->ticketStatus = $map['ticketStatus'];
        }

        return $model;
    }
}
