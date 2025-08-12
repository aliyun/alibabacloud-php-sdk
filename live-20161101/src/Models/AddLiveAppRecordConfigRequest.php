<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\recordFormat;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\transcodeRecordFormat;

class AddLiveAppRecordConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $delayTime;

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
        'appName' => 'AppName',
        'delayTime' => 'DelayTime',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'onDemand' => 'OnDemand',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ownerId' => 'OwnerId',
        'recordFormat' => 'RecordFormat',
        'securityToken' => 'SecurityToken',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'transcodeRecordFormat' => 'TranscodeRecordFormat',
        'transcodeTemplates' => 'TranscodeTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->recordFormat)) {
            Model::validateArray($this->recordFormat);
        }
        if (\is_array($this->transcodeRecordFormat)) {
            Model::validateArray($this->transcodeRecordFormat);
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

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
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
            if (\is_array($this->recordFormat)) {
                $res['RecordFormat'] = [];
                $n1 = 0;
                foreach ($this->recordFormat as $item1) {
                    $res['RecordFormat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->transcodeRecordFormat)) {
                $res['TranscodeRecordFormat'] = [];
                $n1 = 0;
                foreach ($this->transcodeRecordFormat as $item1) {
                    $res['TranscodeRecordFormat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
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
                $n1 = 0;
                foreach ($map['RecordFormat'] as $item1) {
                    $model->recordFormat[$n1] = recordFormat::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TranscodeRecordFormat'] as $item1) {
                    $model->transcodeRecordFormat[$n1] = transcodeRecordFormat::fromMap($item1);
                    ++$n1;
                }
            }
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

        return $model;
    }
}
