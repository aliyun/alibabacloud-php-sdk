<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class ListMarketingFlowRequest extends Model
{
    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $activityStatus;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $relatedFlowCode;

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
    protected $_name = [
        'activityCode' => 'ActivityCode',
        'activityName' => 'ActivityName',
        'activityStatus' => 'ActivityStatus',
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'ownerId' => 'OwnerId',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'relatedFlowCode' => 'RelatedFlowCode',
        'relatedGroupId' => 'RelatedGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->activityStatus) {
            $res['ActivityStatus'] = $this->activityStatus;
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->relatedFlowCode) {
            $res['RelatedFlowCode'] = $this->relatedFlowCode;
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

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['ActivityStatus'])) {
            $model->activityStatus = $map['ActivityStatus'];
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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RelatedFlowCode'])) {
            $model->relatedFlowCode = $map['RelatedFlowCode'];
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

        return $model;
    }
}
