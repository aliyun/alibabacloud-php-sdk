<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class ProcessApprovalRequest extends Model
{
    /**
     * @var string
     */
    public $applicationSheetId;

    /**
     * @var string
     */
    public $approvalAction;

    /**
     * @var string
     */
    public $approvalComments;
    protected $_name = [
        'applicationSheetId' => 'ApplicationSheetId',
        'approvalAction' => 'ApprovalAction',
        'approvalComments' => 'ApprovalComments',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSheetId) {
            $res['ApplicationSheetId'] = $this->applicationSheetId;
        }

        if (null !== $this->approvalAction) {
            $res['ApprovalAction'] = $this->approvalAction;
        }

        if (null !== $this->approvalComments) {
            $res['ApprovalComments'] = $this->approvalComments;
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
        if (isset($map['ApplicationSheetId'])) {
            $model->applicationSheetId = $map['ApplicationSheetId'];
        }

        if (isset($map['ApprovalAction'])) {
            $model->approvalAction = $map['ApprovalAction'];
        }

        if (isset($map['ApprovalComments'])) {
            $model->approvalComments = $map['ApprovalComments'];
        }

        return $model;
    }
}
