<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class smsSendDetailResponse extends Model
{
    /**
     * @var string
     */
    public $applyDateStr;

    /**
     * @var int
     */
    public $billCount;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var int
     */
    public $blackListStatus;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errCodeDesc;

    /**
     * @var string
     */
    public $innerErrCode;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $receiveDateStr;

    /**
     * @var string
     */
    public $sendDateStr;

    /**
     * @var int
     */
    public $sendStatus;

    /**
     * @var int
     */
    public $smsLength;

    /**
     * @var int
     */
    public $statisticsStatus;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'applyDateStr' => 'ApplyDateStr',
        'billCount' => 'BillCount',
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'blackListStatus' => 'BlackListStatus',
        'content' => 'Content',
        'errCode' => 'ErrCode',
        'errCodeDesc' => 'ErrCodeDesc',
        'innerErrCode' => 'InnerErrCode',
        'outId' => 'OutId',
        'phoneNum' => 'PhoneNum',
        'receiveDateStr' => 'ReceiveDateStr',
        'sendDateStr' => 'SendDateStr',
        'sendStatus' => 'SendStatus',
        'smsLength' => 'SmsLength',
        'statisticsStatus' => 'StatisticsStatus',
        'suggestion' => 'Suggestion',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyDateStr) {
            $res['ApplyDateStr'] = $this->applyDateStr;
        }

        if (null !== $this->billCount) {
            $res['BillCount'] = $this->billCount;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->blackListStatus) {
            $res['BlackListStatus'] = $this->blackListStatus;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errCodeDesc) {
            $res['ErrCodeDesc'] = $this->errCodeDesc;
        }

        if (null !== $this->innerErrCode) {
            $res['InnerErrCode'] = $this->innerErrCode;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        if (null !== $this->receiveDateStr) {
            $res['ReceiveDateStr'] = $this->receiveDateStr;
        }

        if (null !== $this->sendDateStr) {
            $res['SendDateStr'] = $this->sendDateStr;
        }

        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }

        if (null !== $this->smsLength) {
            $res['SmsLength'] = $this->smsLength;
        }

        if (null !== $this->statisticsStatus) {
            $res['StatisticsStatus'] = $this->statisticsStatus;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
        if (isset($map['ApplyDateStr'])) {
            $model->applyDateStr = $map['ApplyDateStr'];
        }

        if (isset($map['BillCount'])) {
            $model->billCount = $map['BillCount'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BlackListStatus'])) {
            $model->blackListStatus = $map['BlackListStatus'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrCodeDesc'])) {
            $model->errCodeDesc = $map['ErrCodeDesc'];
        }

        if (isset($map['InnerErrCode'])) {
            $model->innerErrCode = $map['InnerErrCode'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        if (isset($map['ReceiveDateStr'])) {
            $model->receiveDateStr = $map['ReceiveDateStr'];
        }

        if (isset($map['SendDateStr'])) {
            $model->sendDateStr = $map['SendDateStr'];
        }

        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        if (isset($map['SmsLength'])) {
            $model->smsLength = $map['SmsLength'];
        }

        if (isset($map['StatisticsStatus'])) {
            $model->statisticsStatus = $map['StatisticsStatus'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
