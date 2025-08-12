<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $domainName;

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
    public $regionId;

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
    public $vodTranscodeGroupId;
    protected $_name = [
        'appName' => 'AppName',
        'autoCompose' => 'AutoCompose',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
        'cycleDuration' => 'CycleDuration',
        'domainName' => 'DomainName',
        'onDemand' => 'OnDemand',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'storageLocation' => 'StorageLocation',
        'streamName' => 'StreamName',
        'vodTranscodeGroupId' => 'VodTranscodeGroupId',
    ];

    public function validate()
    {
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

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }

        return $model;
    }
}
