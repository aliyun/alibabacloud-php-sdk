<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class AsyncDraftValidateResult extends Model
{
    /**
     * @var DraftValidationDetail
     */
    public $draftValidationDetail;

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
        'draftValidationDetail' => 'draftValidationDetail',
        'message' => 'message',
        'success' => 'success',
        'ticketStatus' => 'ticketStatus',
    ];

    public function validate()
    {
        if (null !== $this->draftValidationDetail) {
            $this->draftValidationDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftValidationDetail) {
            $res['draftValidationDetail'] = null !== $this->draftValidationDetail ? $this->draftValidationDetail->toArray($noStream) : $this->draftValidationDetail;
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
        if (isset($map['draftValidationDetail'])) {
            $model->draftValidationDetail = DraftValidationDetail::fromMap($map['draftValidationDetail']);
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
