<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApprovalTasksByUserRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submittedFrom;

    /**
     * @var string
     */
    public $submittedTo;
    protected $_name = [
        'approvalType' => 'ApprovalType',
        'keyword' => 'Keyword',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'relationType' => 'RelationType',
        'status' => 'Status',
        'submittedFrom' => 'SubmittedFrom',
        'submittedTo' => 'SubmittedTo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submittedFrom) {
            $res['SubmittedFrom'] = $this->submittedFrom;
        }

        if (null !== $this->submittedTo) {
            $res['SubmittedTo'] = $this->submittedTo;
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
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmittedFrom'])) {
            $model->submittedFrom = $map['SubmittedFrom'];
        }

        if (isset($map['SubmittedTo'])) {
            $model->submittedTo = $map['SubmittedTo'];
        }

        return $model;
    }
}
