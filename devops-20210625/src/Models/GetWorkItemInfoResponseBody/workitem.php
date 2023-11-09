<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields;
use AlibabaCloud\Tea\Model;

class workitem extends Model
{
    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $assignedTo;

    /**
     * @example Req
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $creator;

    /**
     * @var customFields[]
     */
    public $customFields;

    /**
     * @example html格式
     *
     * @var string
     */
    public $document;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @example 1640850318000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1640850318000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $identifier;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $logicalStatus;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $modifier;

    /**
     * @example e8bxxxxxxxxxxxxxxxx24
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string[]
     */
    public $participant;

    /**
     * @example ABCD-1
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example e8b26xxxxx6e76aa20xxxxx23
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example 需求项目
     *
     * @var string
     */
    public $spaceName;

    /**
     * @example Project
     *
     * @var string
     */
    public $spaceType;

    /**
     * @var string[]
     */
    public $sprint;

    /**
     * @example 待处理
     *
     * @var string
     */
    public $status;

    /**
     * @example 例：100005
     *
     * @var string
     */
    public $statusIdentifier;

    /**
     * @example 1
     *
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @example 测试工作项
     *
     * @var string
     */
    public $subject;

    /**
     * @var string[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $tracker;

    /**
     * @example 1640850328000
     *
     * @var int
     */
    public $updateStatusAt;

    /**
     * @var string[]
     */
    public $verifier;

    /**
     * @example 9uxxxxxxre573f5xxxxxx0
     *
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'assignedTo'             => 'assignedTo',
        'categoryIdentifier'     => 'categoryIdentifier',
        'creator'                => 'creator',
        'customFields'           => 'customFields',
        'document'               => 'document',
        'finishTime'             => 'finishTime',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'identifier'             => 'identifier',
        'logicalStatus'          => 'logicalStatus',
        'modifier'               => 'modifier',
        'parentIdentifier'       => 'parentIdentifier',
        'participant'            => 'participant',
        'serialNumber'           => 'serialNumber',
        'spaceIdentifier'        => 'spaceIdentifier',
        'spaceName'              => 'spaceName',
        'spaceType'              => 'spaceType',
        'sprint'                 => 'sprint',
        'status'                 => 'status',
        'statusIdentifier'       => 'statusIdentifier',
        'statusStageIdentifier'  => 'statusStageIdentifier',
        'subject'                => 'subject',
        'tag'                    => 'tag',
        'tracker'                => 'tracker',
        'updateStatusAt'         => 'updateStatusAt',
        'verifier'               => 'verifier',
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
        if (null !== $this->customFields) {
            $res['customFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['customFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
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
        if (null !== $this->participant) {
            $res['participant'] = $this->participant;
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
        if (null !== $this->sprint) {
            $res['sprint'] = $this->sprint;
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
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->tracker) {
            $res['tracker'] = $this->tracker;
        }
        if (null !== $this->updateStatusAt) {
            $res['updateStatusAt'] = $this->updateStatusAt;
        }
        if (null !== $this->verifier) {
            $res['verifier'] = $this->verifier;
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
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n                   = 0;
                foreach ($map['customFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? customFields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
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
        if (isset($map['participant'])) {
            if (!empty($map['participant'])) {
                $model->participant = $map['participant'];
            }
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
        if (isset($map['sprint'])) {
            if (!empty($map['sprint'])) {
                $model->sprint = $map['sprint'];
            }
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
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = $map['tag'];
            }
        }
        if (isset($map['tracker'])) {
            if (!empty($map['tracker'])) {
                $model->tracker = $map['tracker'];
            }
        }
        if (isset($map['updateStatusAt'])) {
            $model->updateStatusAt = $map['updateStatusAt'];
        }
        if (isset($map['verifier'])) {
            if (!empty($map['verifier'])) {
                $model->verifier = $map['verifier'];
            }
        }
        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}
