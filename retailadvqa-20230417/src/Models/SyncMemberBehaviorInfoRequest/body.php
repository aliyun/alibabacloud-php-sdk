<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncMemberBehaviorInfoRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $actionDuration;

    /**
     * @var string
     */
    public $actionEndDate;

    /**
     * @var bool
     */
    public $actionResult;

    /**
     * @var string
     */
    public $actionStartDate;

    /**
     * @var string
     */
    public $actionSubType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outerMemberId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platFormType;
    protected $_name = [
        'actionDuration'  => 'ActionDuration',
        'actionEndDate'   => 'ActionEndDate',
        'actionResult'    => 'ActionResult',
        'actionStartDate' => 'ActionStartDate',
        'actionSubType'   => 'ActionSubType',
        'actionType'      => 'ActionType',
        'extra'           => 'Extra',
        'openMerchantId'  => 'OpenMerchantId',
        'outerMemberId'   => 'OuterMemberId',
        'platFormType'    => 'PlatFormType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDuration) {
            $res['ActionDuration'] = $this->actionDuration;
        }
        if (null !== $this->actionEndDate) {
            $res['ActionEndDate'] = $this->actionEndDate;
        }
        if (null !== $this->actionResult) {
            $res['ActionResult'] = $this->actionResult;
        }
        if (null !== $this->actionStartDate) {
            $res['ActionStartDate'] = $this->actionStartDate;
        }
        if (null !== $this->actionSubType) {
            $res['ActionSubType'] = $this->actionSubType;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->platFormType) {
            $res['PlatFormType'] = $this->platFormType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDuration'])) {
            $model->actionDuration = $map['ActionDuration'];
        }
        if (isset($map['ActionEndDate'])) {
            $model->actionEndDate = $map['ActionEndDate'];
        }
        if (isset($map['ActionResult'])) {
            $model->actionResult = $map['ActionResult'];
        }
        if (isset($map['ActionStartDate'])) {
            $model->actionStartDate = $map['ActionStartDate'];
        }
        if (isset($map['ActionSubType'])) {
            $model->actionSubType = $map['ActionSubType'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['PlatFormType'])) {
            $model->platFormType = $map['PlatFormType'];
        }

        return $model;
    }
}
