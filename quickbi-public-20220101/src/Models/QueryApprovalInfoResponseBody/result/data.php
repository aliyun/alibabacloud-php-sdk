<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryApprovalInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1359508
     *
     * @var string
     */
    public $applicantId;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @example 64813ef6da58e80eef8ed2f9
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @example sdasascasxasd
     *
     * @var string
     */
    public $approverId;

    /**
     * @example data_fusion_002
     *
     * @var string
     */
    public $approverName;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleteFlag;

    /**
     * @example 1708568097135
     *
     * @var int
     */
    public $expireDate;

    /**
     * @example 0
     *
     * @var int
     */
    public $flagStatus;

    /**
     * @example 1687315758
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1640595729000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $handleReason;

    /**
     * @example acl-ct4t2e4u2x4ej1bzur
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @example DASHBOARD
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'applicantId'   => 'ApplicantId',
        'applicantName' => 'ApplicantName',
        'applicationId' => 'ApplicationId',
        'applyReason'   => 'ApplyReason',
        'approverId'    => 'ApproverId',
        'approverName'  => 'ApproverName',
        'deleteFlag'    => 'DeleteFlag',
        'expireDate'    => 'ExpireDate',
        'flagStatus'    => 'FlagStatus',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'handleReason'  => 'HandleReason',
        'resourceId'    => 'ResourceId',
        'resourceName'  => 'ResourceName',
        'resourceType'  => 'ResourceType',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
