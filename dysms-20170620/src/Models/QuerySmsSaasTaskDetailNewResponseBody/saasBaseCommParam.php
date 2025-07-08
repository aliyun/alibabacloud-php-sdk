<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewResponseBody\saasBaseCommParam\paramList;

class saasBaseCommParam extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var int
     */
    public $billCount;

    /**
     * @var int
     */
    public $byteCount;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $custId;

    /**
     * @var int
     */
    public $cycleNum;

    /**
     * @var paramList
     */
    public $paramList;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @var string
     */
    public $taskErrorCase;

    /**
     * @var string
     */
    public $taskErrorSuggestion;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'billCount' => 'BillCount',
        'byteCount' => 'ByteCount',
        'clientIp' => 'ClientIp',
        'custId' => 'CustId',
        'cycleNum' => 'CycleNum',
        'paramList' => 'ParamList',
        'partnerId' => 'PartnerId',
        'signature' => 'Signature',
        'smsContent' => 'SmsContent',
        'smsTemplateCode' => 'SmsTemplateCode',
        'taskErrorCase' => 'TaskErrorCase',
        'taskErrorSuggestion' => 'TaskErrorSuggestion',
    ];

    public function validate()
    {
        if (null !== $this->paramList) {
            $this->paramList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->billCount) {
            $res['BillCount'] = $this->billCount;
        }

        if (null !== $this->byteCount) {
            $res['ByteCount'] = $this->byteCount;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->custId) {
            $res['CustId'] = $this->custId;
        }

        if (null !== $this->cycleNum) {
            $res['CycleNum'] = $this->cycleNum;
        }

        if (null !== $this->paramList) {
            $res['ParamList'] = null !== $this->paramList ? $this->paramList->toArray($noStream) : $this->paramList;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }

        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }

        if (null !== $this->taskErrorCase) {
            $res['TaskErrorCase'] = $this->taskErrorCase;
        }

        if (null !== $this->taskErrorSuggestion) {
            $res['TaskErrorSuggestion'] = $this->taskErrorSuggestion;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['BillCount'])) {
            $model->billCount = $map['BillCount'];
        }

        if (isset($map['ByteCount'])) {
            $model->byteCount = $map['ByteCount'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['CustId'])) {
            $model->custId = $map['CustId'];
        }

        if (isset($map['CycleNum'])) {
            $model->cycleNum = $map['CycleNum'];
        }

        if (isset($map['ParamList'])) {
            $model->paramList = paramList::fromMap($map['ParamList']);
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }

        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }

        if (isset($map['TaskErrorCase'])) {
            $model->taskErrorCase = $map['TaskErrorCase'];
        }

        if (isset($map['TaskErrorSuggestion'])) {
            $model->taskErrorSuggestion = $map['TaskErrorSuggestion'];
        }

        return $model;
    }
}
