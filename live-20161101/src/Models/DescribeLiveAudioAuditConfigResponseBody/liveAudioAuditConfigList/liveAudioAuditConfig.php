<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList\liveAudioAuditConfig\scenes;
use AlibabaCloud\Tea\Model;

class liveAudioAuditConfig extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var scenes
     */
    public $scenes;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'appName'    => 'AppName',
        'streamName' => 'StreamName',
        'scenes'     => 'Scenes',
        'domainName' => 'DomainName',
        'bizType'    => 'BizType',
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
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = null !== $this->scenes ? $this->scenes->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAudioAuditConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Scenes'])) {
            $model->scenes = scenes::fromMap($map['Scenes']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
