<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class UpdateMarketingFLowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityDesc;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $paramFlag;

    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $relatedFlowCode;

    /**
     * @var string
     */
    public $relatedFlowName;

    /**
     * @var int
     */
    public $relatedGroupId;

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
    public $startDate;
    protected $_name = [
        'activityCode' => 'ActivityCode',
        'activityDesc' => 'ActivityDesc',
        'activityId' => 'ActivityId',
        'activityName' => 'ActivityName',
        'cronExpression' => 'CronExpression',
        'endDate' => 'EndDate',
        'executionType' => 'ExecutionType',
        'ownerId' => 'OwnerId',
        'paramFlag' => 'ParamFlag',
        'paramsShrink' => 'Params',
        'relatedFlowCode' => 'RelatedFlowCode',
        'relatedFlowName' => 'RelatedFlowName',
        'relatedGroupId' => 'RelatedGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        if (null !== $this->activityDesc) {
            $res['ActivityDesc'] = $this->activityDesc;
        }

        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->executionType) {
            $res['ExecutionType'] = $this->executionType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->paramFlag) {
            $res['ParamFlag'] = $this->paramFlag;
        }

        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }

        if (null !== $this->relatedFlowCode) {
            $res['RelatedFlowCode'] = $this->relatedFlowCode;
        }

        if (null !== $this->relatedFlowName) {
            $res['RelatedFlowName'] = $this->relatedFlowName;
        }

        if (null !== $this->relatedGroupId) {
            $res['RelatedGroupId'] = $this->relatedGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }

        if (isset($map['ActivityDesc'])) {
            $model->activityDesc = $map['ActivityDesc'];
        }

        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExecutionType'])) {
            $model->executionType = $map['ExecutionType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ParamFlag'])) {
            $model->paramFlag = $map['ParamFlag'];
        }

        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }

        if (isset($map['RelatedFlowCode'])) {
            $model->relatedFlowCode = $map['RelatedFlowCode'];
        }

        if (isset($map['RelatedFlowName'])) {
            $model->relatedFlowName = $map['RelatedFlowName'];
        }

        if (isset($map['RelatedGroupId'])) {
            $model->relatedGroupId = $map['RelatedGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
