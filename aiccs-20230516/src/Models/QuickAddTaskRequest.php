<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\QuickAddTaskRequest\callTimeList;

class QuickAddTaskRequest extends Model
{
    /**
     * @var int
     */
    public $agentGroupId;

    /**
     * @var callTimeList[]
     */
    public $callTimeList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $referenceTaskId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $smsTemplateId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateType;
    protected $_name = [
        'agentGroupId' => 'AgentGroupId',
        'callTimeList' => 'CallTimeList',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'referenceTaskId' => 'ReferenceTaskId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'smsTemplateId' => 'SmsTemplateId',
        'startTime' => 'StartTime',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (\is_array($this->callTimeList)) {
            Model::validateArray($this->callTimeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentGroupId) {
            $res['AgentGroupId'] = $this->agentGroupId;
        }

        if (null !== $this->callTimeList) {
            if (\is_array($this->callTimeList)) {
                $res['CallTimeList'] = [];
                $n1 = 0;
                foreach ($this->callTimeList as $item1) {
                    $res['CallTimeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->referenceTaskId) {
            $res['ReferenceTaskId'] = $this->referenceTaskId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->smsTemplateId) {
            $res['SmsTemplateId'] = $this->smsTemplateId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['AgentGroupId'])) {
            $model->agentGroupId = $map['AgentGroupId'];
        }

        if (isset($map['CallTimeList'])) {
            if (!empty($map['CallTimeList'])) {
                $model->callTimeList = [];
                $n1 = 0;
                foreach ($map['CallTimeList'] as $item1) {
                    $model->callTimeList[$n1] = callTimeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ReferenceTaskId'])) {
            $model->referenceTaskId = $map['ReferenceTaskId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SmsTemplateId'])) {
            $model->smsTemplateId = $map['SmsTemplateId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
