<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class AsyncDraftDeployResult extends Model
{
    /**
     * @var ValidateStatementResult
     */
    public $artifactValidationDetail;
    /**
     * @var string
     */
    public $deploymentId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $success;
    /**
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
        if (null !== $this->artifactValidationDetail) {
            $this->artifactValidationDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactValidationDetail) {
            $res['artifactValidationDetail'] = null !== $this->artifactValidationDetail ? $this->artifactValidationDetail->toArray($noStream) : $this->artifactValidationDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
