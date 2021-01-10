<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs;

use AlibabaCloud\Tea\Model;

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
    public $streamName;

    /**
     * @var string
     */
    public $createTime;

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
    public $domainName;

    /**
     * @var string
     */
    public $composeVodTranscodeGroupId;
    protected $_name = [
        'appName'                    => 'AppName',
        'autoCompose'                => 'AutoCompose',
        'streamName'                 => 'StreamName',
        'createTime'                 => 'CreateTime',
        'vodTranscodeGroupId'        => 'VodTranscodeGroupId',
        'cycleDuration'              => 'CycleDuration',
        'domainName'                 => 'DomainName',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->vodTranscodeGroupId) {
            $res['VodTranscodeGroupId'] = $this->vodTranscodeGroupId;
        }
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ComposeVodTranscodeGroupId'])) {
            $model->composeVodTranscodeGroupId = $map['ComposeVodTranscodeGroupId'];
        }

        return $model;
    }
}
