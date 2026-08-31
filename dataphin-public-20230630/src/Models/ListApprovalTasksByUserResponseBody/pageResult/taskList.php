<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApprovalTasksByUserResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class taskList extends Model
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
    public $approvalType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $sourceSystem;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submittedAt;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'applicantId' => 'ApplicantId',
        'applicantName' => 'ApplicantName',
        'approvalType' => 'ApprovalType',
        'id' => 'Id',
        'relationType' => 'RelationType',
        'sourceSystem' => 'SourceSystem',
        'status' => 'Status',
        'submittedAt' => 'SubmittedAt',
        'title' => 'Title',
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

        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->sourceSystem) {
            $res['SourceSystem'] = $this->sourceSystem;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submittedAt) {
            $res['SubmittedAt'] = $this->submittedAt;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['SourceSystem'])) {
            $model->sourceSystem = $map['SourceSystem'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmittedAt'])) {
            $model->submittedAt = $map['SubmittedAt'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
