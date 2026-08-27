<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CreateChatFlowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $bizExtendShrink;

    /**
     * @var string
     */
    public $createFromFlowCode;

    /**
     * @var string
     */
    public $createFromFlowVersion;

    /**
     * @var string
     */
    public $flowTriggerType;

    /**
     * @var string
     */
    public $lifeCycleExtendDataShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtendShrink' => 'BizExtend',
        'createFromFlowCode' => 'CreateFromFlowCode',
        'createFromFlowVersion' => 'CreateFromFlowVersion',
        'flowTriggerType' => 'FlowTriggerType',
        'lifeCycleExtendDataShrink' => 'LifeCycleExtendData',
        'ownerId' => 'OwnerId',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtendShrink) {
            $res['BizExtend'] = $this->bizExtendShrink;
        }

        if (null !== $this->createFromFlowCode) {
            $res['CreateFromFlowCode'] = $this->createFromFlowCode;
        }

        if (null !== $this->createFromFlowVersion) {
            $res['CreateFromFlowVersion'] = $this->createFromFlowVersion;
        }

        if (null !== $this->flowTriggerType) {
            $res['FlowTriggerType'] = $this->flowTriggerType;
        }

        if (null !== $this->lifeCycleExtendDataShrink) {
            $res['LifeCycleExtendData'] = $this->lifeCycleExtendDataShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            $model->bizExtendShrink = $map['BizExtend'];
        }

        if (isset($map['CreateFromFlowCode'])) {
            $model->createFromFlowCode = $map['CreateFromFlowCode'];
        }

        if (isset($map['CreateFromFlowVersion'])) {
            $model->createFromFlowVersion = $map['CreateFromFlowVersion'];
        }

        if (isset($map['FlowTriggerType'])) {
            $model->flowTriggerType = $map['FlowTriggerType'];
        }

        if (isset($map['LifeCycleExtendData'])) {
            $model->lifeCycleExtendDataShrink = $map['LifeCycleExtendData'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
