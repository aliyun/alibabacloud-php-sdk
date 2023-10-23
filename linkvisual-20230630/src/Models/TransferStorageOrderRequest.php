<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class TransferStorageOrderRequest extends Model
{
    /**
     * @var string
     */
    public $dstIotId;

    /**
     * @var bool
     */
    public $enableDefaultPlan;

    /**
     * @var int
     */
    public $eventRecordDuration;

    /**
     * @var bool
     */
    public $eventRecordProlong;

    /**
     * @var bool
     */
    public $immediateUse;

    /**
     * @var int
     */
    public $preRecordDuration;

    /**
     * @var string
     */
    public $srcIotId;

    /**
     * @var string
     */
    public $srcOrderId;

    /**
     * @var bool
     */
    public $supportCrossIdentityTransfer;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dstIotId'                     => 'DstIotId',
        'enableDefaultPlan'            => 'EnableDefaultPlan',
        'eventRecordDuration'          => 'EventRecordDuration',
        'eventRecordProlong'           => 'EventRecordProlong',
        'immediateUse'                 => 'ImmediateUse',
        'preRecordDuration'            => 'PreRecordDuration',
        'srcIotId'                     => 'SrcIotId',
        'srcOrderId'                   => 'SrcOrderId',
        'supportCrossIdentityTransfer' => 'SupportCrossIdentityTransfer',
        'userId'                       => 'UserId',
        'userName'                     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstIotId) {
            $res['DstIotId'] = $this->dstIotId;
        }
        if (null !== $this->enableDefaultPlan) {
            $res['EnableDefaultPlan'] = $this->enableDefaultPlan;
        }
        if (null !== $this->eventRecordDuration) {
            $res['EventRecordDuration'] = $this->eventRecordDuration;
        }
        if (null !== $this->eventRecordProlong) {
            $res['EventRecordProlong'] = $this->eventRecordProlong;
        }
        if (null !== $this->immediateUse) {
            $res['ImmediateUse'] = $this->immediateUse;
        }
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->srcIotId) {
            $res['SrcIotId'] = $this->srcIotId;
        }
        if (null !== $this->srcOrderId) {
            $res['SrcOrderId'] = $this->srcOrderId;
        }
        if (null !== $this->supportCrossIdentityTransfer) {
            $res['SupportCrossIdentityTransfer'] = $this->supportCrossIdentityTransfer;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferStorageOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstIotId'])) {
            $model->dstIotId = $map['DstIotId'];
        }
        if (isset($map['EnableDefaultPlan'])) {
            $model->enableDefaultPlan = $map['EnableDefaultPlan'];
        }
        if (isset($map['EventRecordDuration'])) {
            $model->eventRecordDuration = $map['EventRecordDuration'];
        }
        if (isset($map['EventRecordProlong'])) {
            $model->eventRecordProlong = $map['EventRecordProlong'];
        }
        if (isset($map['ImmediateUse'])) {
            $model->immediateUse = $map['ImmediateUse'];
        }
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['SrcIotId'])) {
            $model->srcIotId = $map['SrcIotId'];
        }
        if (isset($map['SrcOrderId'])) {
            $model->srcOrderId = $map['SrcOrderId'];
        }
        if (isset($map['SupportCrossIdentityTransfer'])) {
            $model->supportCrossIdentityTransfer = $map['SupportCrossIdentityTransfer'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
