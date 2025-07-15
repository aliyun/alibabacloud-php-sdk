<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList\liveAudioAuditConfig\scenes;
use AlibabaCloud\Tea\Model;

class liveAudioAuditConfig extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The business type. You can specify a model. The default value is the domain name.
     *
     * @example example.edu
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The moderation scenarios.
     *
     * @var scenes
     */
    public $scenes;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'bizType' => 'BizType',
        'domainName' => 'DomainName',
        'scenes' => 'Scenes',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = null !== $this->scenes ? $this->scenes->toMap() : null;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Scenes'])) {
            $model->scenes = scenes::fromMap($map['Scenes']);
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
