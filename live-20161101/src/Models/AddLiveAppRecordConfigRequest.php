<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\recordFormat;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\transcodeRecordFormat;
use AlibabaCloud\Tea\Model;

class AddLiveAppRecordConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $onDemand;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var recordFormat[]
     */
    public $recordFormat;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var transcodeRecordFormat[]
     */
    public $transcodeRecordFormat;

    /**
     * @var string[]
     */
    public $transcodeTemplates;
    protected $_name = [
        'appName'               => 'AppName',
        'domainName'            => 'DomainName',
        'endTime'               => 'EndTime',
        'onDemand'              => 'OnDemand',
        'ossBucket'             => 'OssBucket',
        'ossEndpoint'           => 'OssEndpoint',
        'ownerId'               => 'OwnerId',
        'recordFormat'          => 'RecordFormat',
        'securityToken'         => 'SecurityToken',
        'startTime'             => 'StartTime',
        'streamName'            => 'StreamName',
        'transcodeRecordFormat' => 'TranscodeRecordFormat',
        'transcodeTemplates'    => 'TranscodeTemplates',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = [];
            if (null !== $this->recordFormat && \is_array($this->recordFormat)) {
                $n = 0;
                foreach ($this->recordFormat as $item) {
                    $res['RecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->transcodeRecordFormat) {
            $res['TranscodeRecordFormat'] = [];
            if (null !== $this->transcodeRecordFormat && \is_array($this->transcodeRecordFormat)) {
                $n = 0;
                foreach ($this->transcodeRecordFormat as $item) {
                    $res['TranscodeRecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcodeTemplates) {
            $res['TranscodeTemplates'] = $this->transcodeTemplates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAppRecordConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n                   = 0;
                foreach ($map['RecordFormat'] as $item) {
                    $model->recordFormat[$n++] = null !== $item ? recordFormat::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TranscodeRecordFormat'])) {
            if (!empty($map['TranscodeRecordFormat'])) {
                $model->transcodeRecordFormat = [];
                $n                            = 0;
                foreach ($map['TranscodeRecordFormat'] as $item) {
                    $model->transcodeRecordFormat[$n++] = null !== $item ? transcodeRecordFormat::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodeTemplates'])) {
            if (!empty($map['TranscodeTemplates'])) {
                $model->transcodeTemplates = $map['TranscodeTemplates'];
            }
        }

        return $model;
    }
}
