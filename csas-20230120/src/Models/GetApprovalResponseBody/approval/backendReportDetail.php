<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponseBody\approval;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponseBody\approval\backendReportDetail\targetUser;

class backendReportDetail extends Model
{
    /**
     * @var string
     */
    public $associatedPolicyName;

    /**
     * @var string
     */
    public $associatedPolicyType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var mixed
     */
    public $reportObject;

    /**
     * @var targetUser
     */
    public $targetUser;
    protected $_name = [
        'associatedPolicyName' => 'AssociatedPolicyName',
        'associatedPolicyType' => 'AssociatedPolicyType',
        'remark' => 'Remark',
        'reportObject' => 'ReportObject',
        'targetUser' => 'TargetUser',
    ];

    public function validate()
    {
        if (null !== $this->targetUser) {
            $this->targetUser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPolicyName) {
            $res['AssociatedPolicyName'] = $this->associatedPolicyName;
        }

        if (null !== $this->associatedPolicyType) {
            $res['AssociatedPolicyType'] = $this->associatedPolicyType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->reportObject) {
            $res['ReportObject'] = $this->reportObject;
        }

        if (null !== $this->targetUser) {
            $res['TargetUser'] = null !== $this->targetUser ? $this->targetUser->toArray($noStream) : $this->targetUser;
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
        if (isset($map['AssociatedPolicyName'])) {
            $model->associatedPolicyName = $map['AssociatedPolicyName'];
        }

        if (isset($map['AssociatedPolicyType'])) {
            $model->associatedPolicyType = $map['AssociatedPolicyType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ReportObject'])) {
            $model->reportObject = $map['ReportObject'];
        }

        if (isset($map['TargetUser'])) {
            $model->targetUser = targetUser::fromMap($map['TargetUser']);
        }

        return $model;
    }
}
