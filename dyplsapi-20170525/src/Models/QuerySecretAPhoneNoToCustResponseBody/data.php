<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretAPhoneNoToCustResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ANoWhiteGroupId;

    /**
     * @var string
     */
    public $custPhoneNo;

    /**
     * @var string
     */
    public $noType;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $reportResult;

    /**
     * @var string
     */
    public $reportStatus;
    protected $_name = [
        'ANoWhiteGroupId' => 'ANoWhiteGroupId',
        'custPhoneNo' => 'CustPhoneNo',
        'noType' => 'NoType',
        'phoneNoA' => 'PhoneNoA',
        'remark' => 'Remark',
        'reportResult' => 'ReportResult',
        'reportStatus' => 'ReportStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ANoWhiteGroupId) {
            $res['ANoWhiteGroupId'] = $this->ANoWhiteGroupId;
        }

        if (null !== $this->custPhoneNo) {
            $res['CustPhoneNo'] = $this->custPhoneNo;
        }

        if (null !== $this->noType) {
            $res['NoType'] = $this->noType;
        }

        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->reportResult) {
            $res['ReportResult'] = $this->reportResult;
        }

        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
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
        if (isset($map['ANoWhiteGroupId'])) {
            $model->ANoWhiteGroupId = $map['ANoWhiteGroupId'];
        }

        if (isset($map['CustPhoneNo'])) {
            $model->custPhoneNo = $map['CustPhoneNo'];
        }

        if (isset($map['NoType'])) {
            $model->noType = $map['NoType'];
        }

        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ReportResult'])) {
            $model->reportResult = $map['ReportResult'];
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        return $model;
    }
}
