<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponse\liveRecordVodConfigs;

use AlibabaCloud\Tea\Model;

class liveRecordVodConfig extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $vodTranscodeGroupId;

    /**
     * @var int
     */
    public $cycleDuration;

    /**
     * @var string
     */
    public $autoCompose;

    /**
     * @var string
     */
    public $composeVodTranscodeGroupId;
    protected $_name = [
        'createTime'                 => 'CreateTime',
        'domainName'                 => 'DomainName',
        'appName'                    => 'AppName',
        'streamName'                 => 'StreamName',
        'vodTranscodeGroupId'        => 'VodTranscodeGroupId',
        'cycleDuration'              => 'CycleDuration',
        'autoCompose'                => 'AutoCompose',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('vodTranscodeGroupId', $this->vodTranscodeGroupId, true);
        Model::validateRequired('cycleDuration', $this->cycleDuration, true);
        Model::validateRequired('autoCompose', $this->autoCompose, true);
        Model::validateRequired('composeVodTranscodeGroupId', $this->composeVodTranscodeGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->vodTranscodeGroupId) {
            $res['VodTranscodeGroupId'] = $this->vodTranscodeGroupId;
        }
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }
        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }
        if (null !== $this->composeVodTranscodeGroupId) {
            $res['ComposeVodTranscodeGroupId'] = $this->composeVodTranscodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordVodConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }
        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }
        if (isset($map['ComposeVodTranscodeGroupId'])) {
            $model->composeVodTranscodeGroupId = $map['ComposeVodTranscodeGroupId'];
        }

        return $model;
    }
}
