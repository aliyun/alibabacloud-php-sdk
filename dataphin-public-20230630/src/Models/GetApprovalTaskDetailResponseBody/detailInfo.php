<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetApprovalTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetApprovalTaskDetailResponseBody\detailInfo\approveProcessSteps;

class detailInfo extends Model
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
     * @var approveProcessSteps[]
     */
    public $approveProcessSteps;

    /**
     * @var string
     */
    public $bizContent;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var int
     */
    public $id;

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
        'approveProcessSteps' => 'ApproveProcessSteps',
        'bizContent' => 'BizContent',
        'finishedAt' => 'FinishedAt',
        'id' => 'Id',
        'sourceSystem' => 'SourceSystem',
        'status' => 'Status',
        'submittedAt' => 'SubmittedAt',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->approveProcessSteps)) {
            Model::validateArray($this->approveProcessSteps);
        }
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

        if (null !== $this->approveProcessSteps) {
            if (\is_array($this->approveProcessSteps)) {
                $res['ApproveProcessSteps'] = [];
                $n1 = 0;
                foreach ($this->approveProcessSteps as $item1) {
                    $res['ApproveProcessSteps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizContent) {
            $res['BizContent'] = $this->bizContent;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['ApproveProcessSteps'])) {
            if (!empty($map['ApproveProcessSteps'])) {
                $model->approveProcessSteps = [];
                $n1 = 0;
                foreach ($map['ApproveProcessSteps'] as $item1) {
                    $model->approveProcessSteps[$n1] = approveProcessSteps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BizContent'])) {
            $model->bizContent = $map['BizContent'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
