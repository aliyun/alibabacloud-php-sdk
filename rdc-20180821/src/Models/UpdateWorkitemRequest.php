<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkitemRequest extends Model
{
    /**
     * @var int
     */
    public $AKProjectId;

    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $stamp;

    /**
     * @var mixed[]
     */
    public $cfList;

    /**
     * @var int
     */
    public $issueId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $seriousLevel;

    /**
     * @var string
     */
    public $verifier;

    /**
     * @var int
     */
    public $sprintId;

    /**
     * @var bool
     */
    public $ignoreCheck;

    /**
     * @var mixed[]
     */
    public $cfs;
    protected $_name = [
        'AKProjectId'    => 'AKProjectId',
        'corpIdentifier' => 'CorpIdentifier',
        'modifier'       => 'Modifier',
        'assignedTo'     => 'AssignedTo',
        'templateId'     => 'TemplateId',
        'subject'        => 'Subject',
        'description'    => 'Description',
        'stamp'          => 'Stamp',
        'cfList'         => 'CfList',
        'issueId'        => 'IssueId',
        'status'         => 'Status',
        'priority'       => 'Priority',
        'seriousLevel'   => 'SeriousLevel',
        'verifier'       => 'Verifier',
        'sprintId'       => 'SprintId',
        'ignoreCheck'    => 'IgnoreCheck',
        'cfs'            => 'Cfs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AKProjectId) {
            $res['AKProjectId'] = $this->AKProjectId;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->assignedTo) {
            $res['AssignedTo'] = $this->assignedTo;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->stamp) {
            $res['Stamp'] = $this->stamp;
        }
        if (null !== $this->cfList) {
            $res['CfList'] = $this->cfList;
        }
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->seriousLevel) {
            $res['SeriousLevel'] = $this->seriousLevel;
        }
        if (null !== $this->verifier) {
            $res['Verifier'] = $this->verifier;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->ignoreCheck) {
            $res['IgnoreCheck'] = $this->ignoreCheck;
        }
        if (null !== $this->cfs) {
            $res['Cfs'] = $this->cfs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkitemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AKProjectId'])) {
            $model->AKProjectId = $map['AKProjectId'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['AssignedTo'])) {
            $model->assignedTo = $map['AssignedTo'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Stamp'])) {
            $model->stamp = $map['Stamp'];
        }
        if (isset($map['CfList'])) {
            $model->cfList = $map['CfList'];
        }
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SeriousLevel'])) {
            $model->seriousLevel = $map['SeriousLevel'];
        }
        if (isset($map['Verifier'])) {
            $model->verifier = $map['Verifier'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['IgnoreCheck'])) {
            $model->ignoreCheck = $map['IgnoreCheck'];
        }
        if (isset($map['Cfs'])) {
            $model->cfs = $map['Cfs'];
        }

        return $model;
    }
}
