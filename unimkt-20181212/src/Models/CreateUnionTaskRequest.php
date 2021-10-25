<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateUnionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $brandUserId;

    /**
     * @var string
     */
    public $brandUserNick;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var int
     */
    public $quotaDay;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $contentId;

    /**
     * @var int
     */
    public $industryLabelBagId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskBizType;

    /**
     * @var string
     */
    public $taskRuleType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $customCreativeType;

    /**
     * @var string
     */
    public $contentUrl;
    protected $_name = [
        'channelId'          => 'ChannelId',
        'name'               => 'Name',
        'proxyUserId'        => 'ProxyUserId',
        'brandUserId'        => 'BrandUserId',
        'brandUserNick'      => 'BrandUserNick',
        'quota'              => 'Quota',
        'quotaDay'           => 'QuotaDay',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'contentId'          => 'ContentId',
        'industryLabelBagId' => 'IndustryLabelBagId',
        'channel'            => 'Channel',
        'taskType'           => 'TaskType',
        'taskBizType'        => 'TaskBizType',
        'taskRuleType'       => 'TaskRuleType',
        'clientToken'        => 'ClientToken',
        'customCreativeType' => 'CustomCreativeType',
        'contentUrl'         => 'ContentUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->brandUserId) {
            $res['BrandUserId'] = $this->brandUserId;
        }
        if (null !== $this->brandUserNick) {
            $res['BrandUserNick'] = $this->brandUserNick;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->quotaDay) {
            $res['QuotaDay'] = $this->quotaDay;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->industryLabelBagId) {
            $res['IndustryLabelBagId'] = $this->industryLabelBagId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskBizType) {
            $res['TaskBizType'] = $this->taskBizType;
        }
        if (null !== $this->taskRuleType) {
            $res['TaskRuleType'] = $this->taskRuleType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->customCreativeType) {
            $res['CustomCreativeType'] = $this->customCreativeType;
        }
        if (null !== $this->contentUrl) {
            $res['ContentUrl'] = $this->contentUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUnionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['BrandUserId'])) {
            $model->brandUserId = $map['BrandUserId'];
        }
        if (isset($map['BrandUserNick'])) {
            $model->brandUserNick = $map['BrandUserNick'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['QuotaDay'])) {
            $model->quotaDay = $map['QuotaDay'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['IndustryLabelBagId'])) {
            $model->industryLabelBagId = $map['IndustryLabelBagId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskBizType'])) {
            $model->taskBizType = $map['TaskBizType'];
        }
        if (isset($map['TaskRuleType'])) {
            $model->taskRuleType = $map['TaskRuleType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CustomCreativeType'])) {
            $model->customCreativeType = $map['CustomCreativeType'];
        }
        if (isset($map['ContentUrl'])) {
            $model->contentUrl = $map['ContentUrl'];
        }

        return $model;
    }
}
