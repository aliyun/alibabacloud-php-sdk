<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemResponseBody;

use AlibabaCloud\Tea\Model;

class workitem extends Model
{
    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $document;

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
    public $identifier;

    /**
     * @var string
     */
    public $logicalStatus;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @var string
     */
    public $spaceName;

    /**
     * @var string
     */
    public $spaceType;

    /**
     * @var string
     */
    public $sprintIdentifier;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusIdentifier;

    /**
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $updateStatusAt;

    /**
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'assignedTo'             => 'assignedTo',
        'categoryIdentifier'     => 'categoryIdentifier',
        'creator'                => 'creator',
        'document'               => 'document',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'identifier'             => 'identifier',
        'logicalStatus'          => 'logicalStatus',
        'modifier'               => 'modifier',
        'parentIdentifier'       => 'parentIdentifier',
        'serialNumber'           => 'serialNumber',
        'spaceIdentifier'        => 'spaceIdentifier',
        'spaceName'              => 'spaceName',
        'spaceType'              => 'spaceType',
        'sprintIdentifier'       => 'sprintIdentifier',
        'status'                 => 'status',
        'statusIdentifier'       => 'statusIdentifier',
        'statusStageIdentifier'  => 'statusStageIdentifier',
        'subject'                => 'subject',
        'updateStatusAt'         => 'updateStatusAt',
        'workitemTypeIdentifier' => 'workitemTypeIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['assignedTo'] = $this->assignedTo;
        }
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->logicalStatus) {
            $res['logicalStatus'] = $this->logicalStatus;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->parentIdentifier) {
            $res['parentIdentifier'] = $this->parentIdentifier;
        }
        if (null !== $this->serialNumber) {
            $res['serialNumber'] = $this->serialNumber;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceName) {
            $res['spaceName'] = $this->spaceName;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }
        if (null !== $this->sprintIdentifier) {
            $res['sprintIdentifier'] = $this->sprintIdentifier;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
        }
        if (null !== $this->statusStageIdentifier) {
            $res['statusStageIdentifier'] = $this->statusStageIdentifier;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->updateStatusAt) {
            $res['updateStatusAt'] = $this->updateStatusAt;
        }
        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignedTo'])) {
            $model->assignedTo = $map['assignedTo'];
        }
        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['logicalStatus'])) {
            $model->logicalStatus = $map['logicalStatus'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['parentIdentifier'])) {
            $model->parentIdentifier = $map['parentIdentifier'];
        }
        if (isset($map['serialNumber'])) {
            $model->serialNumber = $map['serialNumber'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceName'])) {
            $model->spaceName = $map['spaceName'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }
        if (isset($map['sprintIdentifier'])) {
            $model->sprintIdentifier = $map['sprintIdentifier'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
        }
        if (isset($map['statusStageIdentifier'])) {
            $model->statusStageIdentifier = $map['statusStageIdentifier'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['updateStatusAt'])) {
            $model->updateStatusAt = $map['updateStatusAt'];
        }
        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
