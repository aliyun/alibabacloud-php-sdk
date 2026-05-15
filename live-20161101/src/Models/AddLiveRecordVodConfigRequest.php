<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveRecordVodConfigRequest\recordFormat;

class AddLiveRecordVodConfigRequest extends Model
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
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $recordContent;

    /**
     * @var recordFormat[]
     */
    public $recordFormat;

    /**
     * @var string
     */
    public $regionId;

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
     * @var string[]
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
        'cycleDuration' => 'CycleDuration',
        'delayTime' => 'DelayTime',
        'domainName' => 'DomainName',
        'formatConfig' => 'FormatConfig',
        'onDemand' => 'OnDemand',
        'ownerId' => 'OwnerId',
        'recordContent' => 'RecordContent',
        'recordFormat' => 'RecordFormat',
        'regionId' => 'RegionId',
        'spaceId' => 'SpaceId',
        'storageLocation' => 'StorageLocation',
        'streamName' => 'StreamName',
        'transcodeTemplates' => 'TranscodeTemplates',
        'vodTranscodeGroupId' => 'VodTranscodeGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->recordFormat)) {
            Model::validateArray($this->recordFormat);
        }
        if (\is_array($this->transcodeTemplates)) {
            Model::validateArray($this->transcodeTemplates);
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->recordContent) {
            $res['RecordContent'] = $this->recordContent;
        }

        if (null !== $this->recordFormat) {
            if (\is_array($this->recordFormat)) {
                $res['RecordFormat'] = [];
                $n1 = 0;
                foreach ($this->recordFormat as $item1) {
                    $res['RecordFormat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
            if (\is_array($this->transcodeTemplates)) {
                $res['TranscodeTemplates'] = [];
                $n1 = 0;
                foreach ($this->transcodeTemplates as $item1) {
                    $res['TranscodeTemplates'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RecordContent'])) {
            $model->recordContent = $map['RecordContent'];
        }

        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n1 = 0;
                foreach ($map['RecordFormat'] as $item1) {
                    $model->recordFormat[$n1] = recordFormat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
            if (!empty($map['TranscodeTemplates'])) {
                $model->transcodeTemplates = [];
                $n1 = 0;
                foreach ($map['TranscodeTemplates'] as $item1) {
                    $model->transcodeTemplates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }

        return $model;
    }
}
