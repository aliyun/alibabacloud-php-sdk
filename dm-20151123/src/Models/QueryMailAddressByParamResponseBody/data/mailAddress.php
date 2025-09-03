<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryMailAddressByParamResponseBody\data;

use AlibabaCloud\Dara\Model;

class mailAddress extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $configSetId;

    /**
     * @var string
     */
    public $configSetName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dailyCount;

    /**
     * @var string
     */
    public $dailyReqCount;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $mailAddressId;

    /**
     * @var string
     */
    public $monthCount;

    /**
     * @var string
     */
    public $monthReqCount;

    /**
     * @var string
     */
    public $replyAddress;

    /**
     * @var string
     */
    public $replyStatus;

    /**
     * @var string
     */
    public $sendtype;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'configSetId' => 'ConfigSetId',
        'configSetName' => 'ConfigSetName',
        'createTime' => 'CreateTime',
        'dailyCount' => 'DailyCount',
        'dailyReqCount' => 'DailyReqCount',
        'domainStatus' => 'DomainStatus',
        'mailAddressId' => 'MailAddressId',
        'monthCount' => 'MonthCount',
        'monthReqCount' => 'MonthReqCount',
        'replyAddress' => 'ReplyAddress',
        'replyStatus' => 'ReplyStatus',
        'sendtype' => 'Sendtype',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->configSetId) {
            $res['ConfigSetId'] = $this->configSetId;
        }

        if (null !== $this->configSetName) {
            $res['ConfigSetName'] = $this->configSetName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dailyCount) {
            $res['DailyCount'] = $this->dailyCount;
        }

        if (null !== $this->dailyReqCount) {
            $res['DailyReqCount'] = $this->dailyReqCount;
        }

        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }

        if (null !== $this->mailAddressId) {
            $res['MailAddressId'] = $this->mailAddressId;
        }

        if (null !== $this->monthCount) {
            $res['MonthCount'] = $this->monthCount;
        }

        if (null !== $this->monthReqCount) {
            $res['MonthReqCount'] = $this->monthReqCount;
        }

        if (null !== $this->replyAddress) {
            $res['ReplyAddress'] = $this->replyAddress;
        }

        if (null !== $this->replyStatus) {
            $res['ReplyStatus'] = $this->replyStatus;
        }

        if (null !== $this->sendtype) {
            $res['Sendtype'] = $this->sendtype;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['ConfigSetId'])) {
            $model->configSetId = $map['ConfigSetId'];
        }

        if (isset($map['ConfigSetName'])) {
            $model->configSetName = $map['ConfigSetName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DailyCount'])) {
            $model->dailyCount = $map['DailyCount'];
        }

        if (isset($map['DailyReqCount'])) {
            $model->dailyReqCount = $map['DailyReqCount'];
        }

        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }

        if (isset($map['MailAddressId'])) {
            $model->mailAddressId = $map['MailAddressId'];
        }

        if (isset($map['MonthCount'])) {
            $model->monthCount = $map['MonthCount'];
        }

        if (isset($map['MonthReqCount'])) {
            $model->monthReqCount = $map['MonthReqCount'];
        }

        if (isset($map['ReplyAddress'])) {
            $model->replyAddress = $map['ReplyAddress'];
        }

        if (isset($map['ReplyStatus'])) {
            $model->replyStatus = $map['ReplyStatus'];
        }

        if (isset($map['Sendtype'])) {
            $model->sendtype = $map['Sendtype'];
        }

        return $model;
    }
}
