<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveRecordNotifyConfig extends Model
{
    /**
     * @var bool
     */
    public $needStatusNotify;

    /**
     * @var string
     */
    public $onDemandUrl;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'needStatusNotify' => 'NeedStatusNotify',
        'onDemandUrl'      => 'OnDemandUrl',
        'notifyUrl'        => 'NotifyUrl',
        'domainName'       => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needStatusNotify) {
            $res['NeedStatusNotify'] = $this->needStatusNotify;
        }
        if (null !== $this->onDemandUrl) {
            $res['OnDemandUrl'] = $this->onDemandUrl;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['NeedStatusNotify'])) {
            $model->needStatusNotify = $map['NeedStatusNotify'];
        }
        if (isset($map['OnDemandUrl'])) {
            $model->onDemandUrl = $map['OnDemandUrl'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
