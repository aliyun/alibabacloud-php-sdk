<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponseBody;

use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponseBody\data\activities;
use AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponseBody\data\activityRecords;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $carbonCopy;

    /**
     * @var string
     */
    public $memberName;

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
     * @var activities[]
     */
    public $activities;

    /**
     * @var activityRecords[]
     */
    public $activityRecords;

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

    /**
     * @var string
     */
    public $ticketName;
    protected $_name = [
        'carbonCopy'      => 'CarbonCopy',
        'memberName'      => 'MemberName',
        'createTime'      => 'CreateTime',
        'serviceId'       => 'ServiceId',
        'ticketId'        => 'TicketId',
        'priority'        => 'Priority',
        'creatorId'       => 'CreatorId',
        'formData'        => 'FormData',
        'activities'      => 'Activities',
        'activityRecords' => 'ActivityRecords',
        'fromInfo'        => 'FromInfo',
        'modifiedTime'    => 'ModifiedTime',
        'creatorName'     => 'CreatorName',
        'categoryId'      => 'CategoryId',
        'creatorType'     => 'CreatorType',
        'memberId'        => 'MemberId',
        'caseStatus'      => 'CaseStatus',
        'templateId'      => 'TemplateId',
        'ticketName'      => 'TicketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonCopy) {
            $res['CarbonCopy'] = $this->carbonCopy;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
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
        if (null !== $this->activities) {
            $res['Activities'] = [];
            if (null !== $this->activities && \is_array($this->activities)) {
                $n = 0;
                foreach ($this->activities as $item) {
                    $res['Activities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->activityRecords) {
            $res['ActivityRecords'] = [];
            if (null !== $this->activityRecords && \is_array($this->activityRecords)) {
                $n = 0;
                foreach ($this->activityRecords as $item) {
                    $res['ActivityRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fromInfo) {
            $res['FromInfo'] = $this->fromInfo;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (null !== $this->ticketName) {
            $res['TicketName'] = $this->ticketName;
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
        if (isset($map['CarbonCopy'])) {
            $model->carbonCopy = $map['CarbonCopy'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
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
        if (isset($map['Activities'])) {
            if (!empty($map['Activities'])) {
                $model->activities = [];
                $n                 = 0;
                foreach ($map['Activities'] as $item) {
                    $model->activities[$n++] = null !== $item ? activities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActivityRecords'])) {
            if (!empty($map['ActivityRecords'])) {
                $model->activityRecords = [];
                $n                      = 0;
                foreach ($map['ActivityRecords'] as $item) {
                    $model->activityRecords[$n++] = null !== $item ? activityRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FromInfo'])) {
            $model->fromInfo = $map['FromInfo'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
        if (isset($map['TicketName'])) {
            $model->ticketName = $map['TicketName'];
        }

        return $model;
    }
}
