<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs\liveRecordVodConfig\recordFormatList;

class liveRecordVodConfig extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $autoCompose;

    /**
     * @var string
     */
    public $composeVodTranscodeGroupId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $cycleDuration;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $formatConfig;

    /**
     * @var int
     */
    public $onDemand;

    /**
     * @var string
     */
    public $recordContent;

    /**
     * @var recordFormatList
     */
    public $recordFormatList;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $transcodeTemplates;

    /**
     * @var string
     */
    public $vodTranscodeGroupId;
    protected $_name = [
        'appName' => 'AppName',
        'autoCompose' => 'AutoCompose',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
        'createTime' => 'CreateTime',
        'cycleDuration' => 'CycleDuration',
        'delayTime' => 'DelayTime',
        'domainName' => 'DomainName',
        'formatConfig' => 'FormatConfig',
        'onDemand' => 'OnDemand',
        'recordContent' => 'RecordContent',
        'recordFormatList' => 'RecordFormatList',
        'spaceId' => 'SpaceId',
        'storageLocation' => 'StorageLocation',
        'streamName' => 'StreamName',
        'transcodeTemplates' => 'TranscodeTemplates',
        'vodTranscodeGroupId' => 'VodTranscodeGroupId',
    ];

    public function validate()
    {
        if (null !== $this->recordFormatList) {
            $this->recordFormatList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }

        if (null !== $this->composeVodTranscodeGroupId) {
            $res['ComposeVodTranscodeGroupId'] = $this->composeVodTranscodeGroupId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->formatConfig) {
            $res['FormatConfig'] = $this->formatConfig;
        }

        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }

        if (null !== $this->recordContent) {
            $res['RecordContent'] = $this->recordContent;
        }

        if (null !== $this->recordFormatList) {
            $res['RecordFormatList'] = null !== $this->recordFormatList ? $this->recordFormatList->toArray($noStream) : $this->recordFormatList;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->transcodeTemplates) {
            $res['TranscodeTemplates'] = $this->transcodeTemplates;
        }

        if (null !== $this->vodTranscodeGroupId) {
            $res['VodTranscodeGroupId'] = $this->vodTranscodeGroupId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }

        if (isset($map['ComposeVodTranscodeGroupId'])) {
            $model->composeVodTranscodeGroupId = $map['ComposeVodTranscodeGroupId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['FormatConfig'])) {
            $model->formatConfig = $map['FormatConfig'];
        }

        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }

        if (isset($map['RecordContent'])) {
            $model->recordContent = $map['RecordContent'];
        }

        if (isset($map['RecordFormatList'])) {
            $model->recordFormatList = recordFormatList::fromMap($map['RecordFormatList']);
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['TranscodeTemplates'])) {
            $model->transcodeTemplates = $map['TranscodeTemplates'];
        }

        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }

        return $model;
    }
}
