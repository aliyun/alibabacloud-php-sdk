<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescAccountSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $dailyQuota;

    /**
     * @var int
     */
    public $dayuStatus;

    /**
     * @var int
     */
    public $domains;

    /**
     * @var int
     */
    public $enableTimes;

    /**
     * @var int
     */
    public $mailAddresses;

    /**
     * @var int
     */
    public $maxQuotaLevel;

    /**
     * @var int
     */
    public $monthQuota;

    /**
     * @var int
     */
    public $quotaLevel;

    /**
     * @var int
     */
    public $receivers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $smsRecord;

    /**
     * @var int
     */
    public $smsSign;

    /**
     * @var int
     */
    public $smsTemplates;

    /**
     * @var int
     */
    public $tags;

    /**
     * @var int
     */
    public $templates;

    /**
     * @var int
     */
    public $userStatus;
    protected $_name = [
        'dailyQuota'    => 'DailyQuota',
        'dayuStatus'    => 'DayuStatus',
        'domains'       => 'Domains',
        'enableTimes'   => 'EnableTimes',
        'mailAddresses' => 'MailAddresses',
        'maxQuotaLevel' => 'MaxQuotaLevel',
        'monthQuota'    => 'MonthQuota',
        'quotaLevel'    => 'QuotaLevel',
        'receivers'     => 'Receivers',
        'requestId'     => 'RequestId',
        'smsRecord'     => 'SmsRecord',
        'smsSign'       => 'SmsSign',
        'smsTemplates'  => 'SmsTemplates',
        'tags'          => 'Tags',
        'templates'     => 'Templates',
        'userStatus'    => 'UserStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyQuota) {
            $res['DailyQuota'] = $this->dailyQuota;
        }
        if (null !== $this->dayuStatus) {
            $res['DayuStatus'] = $this->dayuStatus;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->enableTimes) {
            $res['EnableTimes'] = $this->enableTimes;
        }
        if (null !== $this->mailAddresses) {
            $res['MailAddresses'] = $this->mailAddresses;
        }
        if (null !== $this->maxQuotaLevel) {
            $res['MaxQuotaLevel'] = $this->maxQuotaLevel;
        }
        if (null !== $this->monthQuota) {
            $res['MonthQuota'] = $this->monthQuota;
        }
        if (null !== $this->quotaLevel) {
            $res['QuotaLevel'] = $this->quotaLevel;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = $this->receivers;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smsRecord) {
            $res['SmsRecord'] = $this->smsRecord;
        }
        if (null !== $this->smsSign) {
            $res['SmsSign'] = $this->smsSign;
        }
        if (null !== $this->smsTemplates) {
            $res['SmsTemplates'] = $this->smsTemplates;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescAccountSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyQuota'])) {
            $model->dailyQuota = $map['DailyQuota'];
        }
        if (isset($map['DayuStatus'])) {
            $model->dayuStatus = $map['DayuStatus'];
        }
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }
        if (isset($map['EnableTimes'])) {
            $model->enableTimes = $map['EnableTimes'];
        }
        if (isset($map['MailAddresses'])) {
            $model->mailAddresses = $map['MailAddresses'];
        }
        if (isset($map['MaxQuotaLevel'])) {
            $model->maxQuotaLevel = $map['MaxQuotaLevel'];
        }
        if (isset($map['MonthQuota'])) {
            $model->monthQuota = $map['MonthQuota'];
        }
        if (isset($map['QuotaLevel'])) {
            $model->quotaLevel = $map['QuotaLevel'];
        }
        if (isset($map['Receivers'])) {
            $model->receivers = $map['Receivers'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmsRecord'])) {
            $model->smsRecord = $map['SmsRecord'];
        }
        if (isset($map['SmsSign'])) {
            $model->smsSign = $map['SmsSign'];
        }
        if (isset($map['SmsTemplates'])) {
            $model->smsTemplates = $map['SmsTemplates'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
