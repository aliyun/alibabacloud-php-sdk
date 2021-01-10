<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\recordFormat;
use AlibabaCloud\Tea\Model;

class AddLiveAppRecordConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

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
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $streamName;

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
    public $onDemand;

    /**
     * @var recordFormat[]
     */
    public $recordFormat;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'ownerId'       => 'OwnerId',
        'domainName'    => 'DomainName',
        'appName'       => 'AppName',
        'ossEndpoint'   => 'OssEndpoint',
        'ossBucket'     => 'OssBucket',
        'streamName'    => 'StreamName',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'onDemand'      => 'OnDemand',
        'recordFormat'  => 'RecordFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
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

        return $model;
    }
}
