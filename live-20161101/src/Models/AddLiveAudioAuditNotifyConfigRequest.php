<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveAudioAuditNotifyConfigRequest extends Model
{
    /**
     * @description The callback URL. This URL is used to receive callback notifications about violations in audio.
     *
     * @example https://demo.aliyundoc.com/callback
     *
     * @var string
     */
    public $callback;

    /**
     * @description The callback template. Valid values:
     *
     *   **{DomainName}**: the streaming domain.
     *   **{AppName}**: the name of the application to which the live stream belongs.
     *   **{StreamName}**: the name of the live stream.
     *   **{Timestamp}**: the time when the callback is returned. The value of this field is a UNIX timestamp. Unit: seconds.
     *   **{Result}**: the moderation results.
     *
     * @example {"domain":{DomainName},"app":{AppName},"stream":{StreamName},"timestamp":{Timestamp},"result":{Result}}
     *
     * @var string
     */
    public $callbackTemplate;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'callback' => 'Callback',
        'callbackTemplate' => 'CallbackTemplate',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->callbackTemplate) {
            $res['CallbackTemplate'] = $this->callbackTemplate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAudioAuditNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CallbackTemplate'])) {
            $model->callbackTemplate = $map['CallbackTemplate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
