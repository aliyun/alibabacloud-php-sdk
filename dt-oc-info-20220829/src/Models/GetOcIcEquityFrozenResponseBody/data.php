<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityFrozenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $freezeAmount;

    /**
     * @example 913302827369845089
     *
     * @var string
     */
    public $freezeCardNum;

    /**
     * @var string
     */
    public $freezeCardType;

    /**
     * @var string
     */
    public $freezeCourt;

    /**
     * @example 2022-11-12
     *
     * @var string
     */
    public $freezeEndDate;

    /**
     * @var string
     */
    public $freezeExecItem;

    /**
     * @var string
     */
    public $freezeExecPerson;

    /**
     * @var string
     */
    public $freezeNoticeNum;

    /**
     * @example 2021-10-11
     *
     * @var string
     */
    public $freezePublishDate;

    /**
     * @example 2019-11-13
     *
     * @var string
     */
    public $freezeStartDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unfreezeAdjustNum;

    /**
     * @var string
     */
    public $unfreezeCourt;

    /**
     * @var string
     */
    public $unfreezeDate;

    /**
     * @var string
     */
    public $unfreezeReason;
    protected $_name = [
        'freezeAmount'      => 'FreezeAmount',
        'freezeCardNum'     => 'FreezeCardNum',
        'freezeCardType'    => 'FreezeCardType',
        'freezeCourt'       => 'FreezeCourt',
        'freezeEndDate'     => 'FreezeEndDate',
        'freezeExecItem'    => 'FreezeExecItem',
        'freezeExecPerson'  => 'FreezeExecPerson',
        'freezeNoticeNum'   => 'FreezeNoticeNum',
        'freezePublishDate' => 'FreezePublishDate',
        'freezeStartDate'   => 'FreezeStartDate',
        'status'            => 'Status',
        'unfreezeAdjustNum' => 'UnfreezeAdjustNum',
        'unfreezeCourt'     => 'UnfreezeCourt',
        'unfreezeDate'      => 'UnfreezeDate',
        'unfreezeReason'    => 'UnfreezeReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freezeAmount) {
            $res['FreezeAmount'] = $this->freezeAmount;
        }
        if (null !== $this->freezeCardNum) {
            $res['FreezeCardNum'] = $this->freezeCardNum;
        }
        if (null !== $this->freezeCardType) {
            $res['FreezeCardType'] = $this->freezeCardType;
        }
        if (null !== $this->freezeCourt) {
            $res['FreezeCourt'] = $this->freezeCourt;
        }
        if (null !== $this->freezeEndDate) {
            $res['FreezeEndDate'] = $this->freezeEndDate;
        }
        if (null !== $this->freezeExecItem) {
            $res['FreezeExecItem'] = $this->freezeExecItem;
        }
        if (null !== $this->freezeExecPerson) {
            $res['FreezeExecPerson'] = $this->freezeExecPerson;
        }
        if (null !== $this->freezeNoticeNum) {
            $res['FreezeNoticeNum'] = $this->freezeNoticeNum;
        }
        if (null !== $this->freezePublishDate) {
            $res['FreezePublishDate'] = $this->freezePublishDate;
        }
        if (null !== $this->freezeStartDate) {
            $res['FreezeStartDate'] = $this->freezeStartDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unfreezeAdjustNum) {
            $res['UnfreezeAdjustNum'] = $this->unfreezeAdjustNum;
        }
        if (null !== $this->unfreezeCourt) {
            $res['UnfreezeCourt'] = $this->unfreezeCourt;
        }
        if (null !== $this->unfreezeDate) {
            $res['UnfreezeDate'] = $this->unfreezeDate;
        }
        if (null !== $this->unfreezeReason) {
            $res['UnfreezeReason'] = $this->unfreezeReason;
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
        if (isset($map['FreezeAmount'])) {
            $model->freezeAmount = $map['FreezeAmount'];
        }
        if (isset($map['FreezeCardNum'])) {
            $model->freezeCardNum = $map['FreezeCardNum'];
        }
        if (isset($map['FreezeCardType'])) {
            $model->freezeCardType = $map['FreezeCardType'];
        }
        if (isset($map['FreezeCourt'])) {
            $model->freezeCourt = $map['FreezeCourt'];
        }
        if (isset($map['FreezeEndDate'])) {
            $model->freezeEndDate = $map['FreezeEndDate'];
        }
        if (isset($map['FreezeExecItem'])) {
            $model->freezeExecItem = $map['FreezeExecItem'];
        }
        if (isset($map['FreezeExecPerson'])) {
            $model->freezeExecPerson = $map['FreezeExecPerson'];
        }
        if (isset($map['FreezeNoticeNum'])) {
            $model->freezeNoticeNum = $map['FreezeNoticeNum'];
        }
        if (isset($map['FreezePublishDate'])) {
            $model->freezePublishDate = $map['FreezePublishDate'];
        }
        if (isset($map['FreezeStartDate'])) {
            $model->freezeStartDate = $map['FreezeStartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnfreezeAdjustNum'])) {
            $model->unfreezeAdjustNum = $map['UnfreezeAdjustNum'];
        }
        if (isset($map['UnfreezeCourt'])) {
            $model->unfreezeCourt = $map['UnfreezeCourt'];
        }
        if (isset($map['UnfreezeDate'])) {
            $model->unfreezeDate = $map['UnfreezeDate'];
        }
        if (isset($map['UnfreezeReason'])) {
            $model->unfreezeReason = $map['UnfreezeReason'];
        }

        return $model;
    }
}
