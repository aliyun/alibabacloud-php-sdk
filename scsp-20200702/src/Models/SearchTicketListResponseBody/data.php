<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $carbonCopy;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var int
     */
    public $ticketId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $formData;

    /**
     * @var string
     */
    public $fromInfo;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $creatorType;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var int
     */
    public $caseStatus;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'memberName'   => 'MemberName',
        'carbonCopy'   => 'CarbonCopy',
        'createTime'   => 'CreateTime',
        'serviceId'    => 'ServiceId',
        'ticketId'     => 'TicketId',
        'priority'     => 'Priority',
        'creatorId'    => 'CreatorId',
        'formData'     => 'FormData',
        'fromInfo'     => 'FromInfo',
        'modifiedTime' => 'ModifiedTime',
        'taskStatus'   => 'TaskStatus',
        'creatorName'  => 'CreatorName',
        'categoryId'   => 'CategoryId',
        'creatorType'  => 'CreatorType',
        'memberId'     => 'MemberId',
        'caseStatus'   => 'CaseStatus',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->carbonCopy) {
            $res['CarbonCopy'] = $this->carbonCopy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->formData) {
            $res['FormData'] = $this->formData;
        }
        if (null !== $this->fromInfo) {
            $res['FromInfo'] = $this->fromInfo;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->caseStatus) {
            $res['CaseStatus'] = $this->caseStatus;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['CarbonCopy'])) {
            $model->carbonCopy = $map['CarbonCopy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['FormData'])) {
            $model->formData = $map['FormData'];
        }
        if (isset($map['FromInfo'])) {
            $model->fromInfo = $map['FromInfo'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['CaseStatus'])) {
            $model->caseStatus = $map['CaseStatus'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
