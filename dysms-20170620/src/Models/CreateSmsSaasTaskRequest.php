<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsSaasTaskRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $orderTime;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneList;

    /**
     * @var string
     */
    public $prodCode;

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
    public $scheduleType;

    /**
     * @var string
     */
    public $signName;

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
    public $taskName;

    /**
     * @var string
     */
    public $validCount;
    protected $_name = [
        'bizType' => 'BizType',
        'clientIp' => 'ClientIp',
        'dataType' => 'DataType',
        'orderTime' => 'OrderTime',
        'ossFileName' => 'OssFileName',
        'ownerId' => 'OwnerId',
        'phoneList' => 'PhoneList',
        'prodCode' => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scheduleType' => 'ScheduleType',
        'signName' => 'SignName',
        'smsContent' => 'SmsContent',
        'smsTemplateCode' => 'SmsTemplateCode',
        'taskName' => 'TaskName',
        'validCount' => 'ValidCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->orderTime) {
            $res['OrderTime'] = $this->orderTime;
        }

        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneList) {
            $res['PhoneList'] = $this->phoneList;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }

        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->validCount) {
            $res['ValidCount'] = $this->validCount;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['OrderTime'])) {
            $model->orderTime = $map['OrderTime'];
        }

        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneList'])) {
            $model->phoneList = $map['PhoneList'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }

        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['ValidCount'])) {
            $model->validCount = $map['ValidCount'];
        }

        return $model;
    }
}
