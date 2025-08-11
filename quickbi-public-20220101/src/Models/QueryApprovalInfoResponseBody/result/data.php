<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryApprovalInfoResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicantId;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var string
     */
    public $approverId;

    /**
     * @var string
     */
    public $approverName;

    /**
     * @var bool
     */
    public $deleteFlag;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var int
     */
    public $flagStatus;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $handleReason;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'applicantId' => 'ApplicantId',
        'applicantName' => 'ApplicantName',
        'applicationId' => 'ApplicationId',
        'applyReason' => 'ApplyReason',
        'approverId' => 'ApproverId',
        'approverName' => 'ApproverName',
        'deleteFlag' => 'DeleteFlag',
        'expireDate' => 'ExpireDate',
        'flagStatus' => 'FlagStatus',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'handleReason' => 'HandleReason',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }

        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }

        if (null !== $this->approverId) {
            $res['ApproverId'] = $this->approverId;
        }

        if (null !== $this->approverName) {
            $res['ApproverName'] = $this->approverName;
        }

        if (null !== $this->deleteFlag) {
            $res['DeleteFlag'] = $this->deleteFlag;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->flagStatus) {
            $res['FlagStatus'] = $this->flagStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->handleReason) {
            $res['HandleReason'] = $this->handleReason;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }

        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }

        if (isset($map['ApproverId'])) {
            $model->approverId = $map['ApproverId'];
        }

        if (isset($map['ApproverName'])) {
            $model->approverName = $map['ApproverName'];
        }

        if (isset($map['DeleteFlag'])) {
            $model->deleteFlag = $map['DeleteFlag'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['FlagStatus'])) {
            $model->flagStatus = $map['FlagStatus'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HandleReason'])) {
            $model->handleReason = $map['HandleReason'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
