<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentCallConfig;

use AlibabaCloud\Dara\Model;

class transferConfig extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var int
     */
    public $callerNumberType;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $callingNumberType;

    /**
     * @var string
     */
    public $customerRouteCode;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $failureContent;

    /**
     * @var string
     */
    public $seatRouteCode;

    /**
     * @var string
     */
    public $seatRouteName;

    /**
     * @var string
     */
    public $transferBizId;

    /**
     * @var string
     */
    public $transferContent;

    /**
     * @var int
     */
    public $transferType;
    protected $_name = [
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'callerNumberType' => 'CallerNumberType',
        'callingNumber' => 'CallingNumber',
        'callingNumberType' => 'CallingNumberType',
        'customerRouteCode' => 'CustomerRouteCode',
        'enabled' => 'Enabled',
        'extraInfo' => 'ExtraInfo',
        'failureContent' => 'FailureContent',
        'seatRouteCode' => 'SeatRouteCode',
        'seatRouteName' => 'SeatRouteName',
        'transferBizId' => 'TransferBizId',
        'transferContent' => 'TransferContent',
        'transferType' => 'TransferType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->callerNumberType) {
            $res['CallerNumberType'] = $this->callerNumberType;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->callingNumberType) {
            $res['CallingNumberType'] = $this->callingNumberType;
        }

        if (null !== $this->customerRouteCode) {
            $res['CustomerRouteCode'] = $this->customerRouteCode;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->failureContent) {
            $res['FailureContent'] = $this->failureContent;
        }

        if (null !== $this->seatRouteCode) {
            $res['SeatRouteCode'] = $this->seatRouteCode;
        }

        if (null !== $this->seatRouteName) {
            $res['SeatRouteName'] = $this->seatRouteName;
        }

        if (null !== $this->transferBizId) {
            $res['TransferBizId'] = $this->transferBizId;
        }

        if (null !== $this->transferContent) {
            $res['TransferContent'] = $this->transferContent;
        }

        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
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
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['CallerNumberType'])) {
            $model->callerNumberType = $map['CallerNumberType'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['CallingNumberType'])) {
            $model->callingNumberType = $map['CallingNumberType'];
        }

        if (isset($map['CustomerRouteCode'])) {
            $model->customerRouteCode = $map['CustomerRouteCode'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['FailureContent'])) {
            $model->failureContent = $map['FailureContent'];
        }

        if (isset($map['SeatRouteCode'])) {
            $model->seatRouteCode = $map['SeatRouteCode'];
        }

        if (isset($map['SeatRouteName'])) {
            $model->seatRouteName = $map['SeatRouteName'];
        }

        if (isset($map['TransferBizId'])) {
            $model->transferBizId = $map['TransferBizId'];
        }

        if (isset($map['TransferContent'])) {
            $model->transferContent = $map['TransferContent'];
        }

        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }

        return $model;
    }
}
