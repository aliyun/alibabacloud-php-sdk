<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsResponseBody;

use AlibabaCloud\Tea\Model;

class workitems extends Model
{
    /**
     * @description 负责人aliyunPk
     *
     * @var string
     */
    public $assignedTo;

    /**
     * @description 工作项的类型id
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @description 创建人aliyunPK
     *
     * @var string
     */
    public $creator;

    /**
     * @description 工作项内容
     *
     * @var string
     */
    public $document;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 工作项唯一标识
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 逻辑状态
     *
     * @var string
     */
    public $logicalStatus;

    /**
     * @description 修改人aliyunPK
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 父工作项id
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description 编号
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description 所属项目id
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description 所属项目名称
     *
     * @var string
     */
    public $spaceName;

    /**
     * @description 项目类型
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description 迭代id
     *
     * @var string
     */
    public $sprintIdentifier;

    /**
     * @description 状态名称
     *
     * @var string
     */
    public $status;

    /**
     * @description 状态唯一标识
     *
     * @var string
     */
    public $statusIdentifier;

    /**
     * @description 状态阶段id
     *
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @description 工作项标题
     *
     * @var string
     */
    public $subject;

    /**
     * @description 状态更新时间
     *
     * @var int
     */
    public $updateStatusAt;

    /**
     * @description 工作项类型id
     *
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
     * @return workitems
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
