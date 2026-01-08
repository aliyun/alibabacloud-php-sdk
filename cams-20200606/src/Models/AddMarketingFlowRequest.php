<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class AddMarketingFlowRequest extends Model
{
    /**
     * @var string
     */
    public $activityDesc;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

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
     * @var mixed[]
     */
    public $params;

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
        'activityDesc' => 'ActivityDesc',
        'activityName' => 'ActivityName',
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'cronExpression' => 'CronExpression',
        'endDate' => 'EndDate',
        'executionType' => 'ExecutionType',
        'ownerId' => 'OwnerId',
        'paramFlag' => 'ParamFlag',
        'params' => 'Params',
        'relatedFlowCode' => 'RelatedFlowCode',
        'relatedFlowName' => 'RelatedFlowName',
        'relatedGroupId' => 'RelatedGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityDesc) {
            $res['ActivityDesc'] = $this->activityDesc;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtend) {
            if (\is_array($this->bizExtend)) {
                $res['BizExtend'] = [];
                foreach ($this->bizExtend as $key1 => $value1) {
                    $res['BizExtend'][$key1] = $value1;
                }
            }
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

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['Params'][$key1] = $value1;
                }
            }
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
        if (isset($map['ActivityDesc'])) {
            $model->activityDesc = $map['ActivityDesc'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            if (!empty($map['BizExtend'])) {
                $model->bizExtend = [];
                foreach ($map['BizExtend'] as $key1 => $value1) {
                    $model->bizExtend[$key1] = $value1;
                }
            }
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
            if (!empty($map['Params'])) {
                $model->params = [];
                foreach ($map['Params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
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
