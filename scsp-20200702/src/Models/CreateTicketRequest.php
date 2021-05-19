<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var int
     */
    public $creatorType;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $fromInfo;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $carbonCopy;

    /**
     * @var string
     */
    public $formData;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'templateId'  => 'TemplateId',
        'categoryId'  => 'CategoryId',
        'creatorId'   => 'CreatorId',
        'creatorType' => 'CreatorType',
        'creatorName' => 'CreatorName',
        'memberId'    => 'MemberId',
        'memberName'  => 'MemberName',
        'fromInfo'    => 'FromInfo',
        'priority'    => 'Priority',
        'carbonCopy'  => 'CarbonCopy',
        'formData'    => 'FormData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->fromInfo) {
            $res['FromInfo'] = $this->fromInfo;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->carbonCopy) {
            $res['CarbonCopy'] = $this->carbonCopy;
        }
        if (null !== $this->formData) {
            $res['FormData'] = $this->formData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['FromInfo'])) {
            $model->fromInfo = $map['FromInfo'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['CarbonCopy'])) {
            $model->carbonCopy = $map['CarbonCopy'];
        }
        if (isset($map['FormData'])) {
            $model->formData = $map['FormData'];
        }

        return $model;
    }
}
