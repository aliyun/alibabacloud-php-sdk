<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkitemRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $author;

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
     * @var int
     */
    public $AKProjectId;

    /**
     * @var string
     */
    public $cfList;

    /**
     * @var string
     */
    public $verifier;

    /**
     * @var int
     */
    public $priorityId;

    /**
     * @var int
     */
    public $seriousLevelId;

    /**
     * @var string
     */
    public $watcherUsers;

    /**
     * @var string
     */
    public $moduleIds;
    protected $_name = [
        'corpIdentifier' => 'CorpIdentifier',
        'author'         => 'Author',
        'assignedTo'     => 'AssignedTo',
        'templateId'     => 'TemplateId',
        'subject'        => 'Subject',
        'description'    => 'Description',
        'stamp'          => 'Stamp',
        'AKProjectId'    => 'AKProjectId',
        'cfList'         => 'CfList',
        'verifier'       => 'Verifier',
        'priorityId'     => 'PriorityId',
        'seriousLevelId' => 'SeriousLevelId',
        'watcherUsers'   => 'WatcherUsers',
        'moduleIds'      => 'ModuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
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
        if (null !== $this->AKProjectId) {
            $res['AKProjectId'] = $this->AKProjectId;
        }
        if (null !== $this->cfList) {
            $res['CfList'] = $this->cfList;
        }
        if (null !== $this->verifier) {
            $res['Verifier'] = $this->verifier;
        }
        if (null !== $this->priorityId) {
            $res['PriorityId'] = $this->priorityId;
        }
        if (null !== $this->seriousLevelId) {
            $res['SeriousLevelId'] = $this->seriousLevelId;
        }
        if (null !== $this->watcherUsers) {
            $res['WatcherUsers'] = $this->watcherUsers;
        }
        if (null !== $this->moduleIds) {
            $res['ModuleIds'] = $this->moduleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
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
        if (isset($map['AKProjectId'])) {
            $model->AKProjectId = $map['AKProjectId'];
        }
        if (isset($map['CfList'])) {
            $model->cfList = $map['CfList'];
        }
        if (isset($map['Verifier'])) {
            $model->verifier = $map['Verifier'];
        }
        if (isset($map['PriorityId'])) {
            $model->priorityId = $map['PriorityId'];
        }
        if (isset($map['SeriousLevelId'])) {
            $model->seriousLevelId = $map['SeriousLevelId'];
        }
        if (isset($map['WatcherUsers'])) {
            $model->watcherUsers = $map['WatcherUsers'];
        }
        if (isset($map['ModuleIds'])) {
            $model->moduleIds = $map['ModuleIds'];
        }

        return $model;
    }
}
