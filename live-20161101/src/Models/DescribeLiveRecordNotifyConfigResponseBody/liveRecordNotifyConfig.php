<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveRecordNotifyConfig extends Model
{
    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether recording status callbacks are enabled. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $needStatusNotify;

    /**
     * @description The recording callback URL.
     *
     * @example http://learn.aliyundoc.com/examplecallback.action
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The callback URL for on-demand recording.
     *
     * @example http://guide.aliyundoc.com/ondemandcallback.action
     *
     * @var string
     */
    public $onDemandUrl;
    protected $_name = [
        'domainName' => 'DomainName',
        'needStatusNotify' => 'NeedStatusNotify',
        'notifyUrl' => 'NotifyUrl',
        'onDemandUrl' => 'OnDemandUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->needStatusNotify) {
            $res['NeedStatusNotify'] = $this->needStatusNotify;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->onDemandUrl) {
            $res['OnDemandUrl'] = $this->onDemandUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordNotifyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NeedStatusNotify'])) {
            $model->needStatusNotify = $map['NeedStatusNotify'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['OnDemandUrl'])) {
            $model->onDemandUrl = $map['OnDemandUrl'];
        }

        return $model;
    }
}
