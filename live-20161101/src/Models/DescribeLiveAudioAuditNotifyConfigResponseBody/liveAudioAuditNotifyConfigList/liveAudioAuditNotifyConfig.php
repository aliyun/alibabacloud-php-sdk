<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;

use AlibabaCloud\Tea\Model;

class liveAudioAuditNotifyConfig extends Model
{
    /**
     * @description The callback URL.
     *
     * @example http://guide.aliyundoc.com/callback
     *
     * @var string
     */
    public $callback;

    /**
     * @description The callback template. The following fields are configured:
     *
     *   **{DomainName}**: the streaming domain.
     *   **{AppName}**: the name of the application to which the live stream belongs.
     *   **{StreamName}**: the name of the live stream.
     *   **{Timestamp}**: the time when the callback is returned. The value of this field is a UNIX timestamp. Unit: seconds.
     *   **{Result}**: the moderation results.
     *
     * @example {\\"domain\\":{DomainName},\\"app\\":{AppName},\\"stream\\":{StreamName},\\"timestamp\\":{Timestamp},\\"result\\":{Result}}
     *
     * @var string
     */
    public $callbackTemplate;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'callback' => 'Callback',
        'callbackTemplate' => 'CallbackTemplate',
        'domainName' => 'DomainName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAudioAuditNotifyConfig
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

        return $model;
    }
}
