<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyConfigResponse;

use AlibabaCloud\Tea\Model;

class liveRecordNotifyConfig extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $onDemandUrl;

    /**
     * @var bool
     */
    public $needStatusNotify;
    protected $_name = [
        'domainName'       => 'DomainName',
        'notifyUrl'        => 'NotifyUrl',
        'onDemandUrl'      => 'OnDemandUrl',
        'needStatusNotify' => 'NeedStatusNotify',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('notifyUrl', $this->notifyUrl, true);
        Model::validateRequired('onDemandUrl', $this->onDemandUrl, true);
        Model::validateRequired('needStatusNotify', $this->needStatusNotify, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->onDemandUrl) {
            $res['OnDemandUrl'] = $this->onDemandUrl;
        }
        if (null !== $this->needStatusNotify) {
            $res['NeedStatusNotify'] = $this->needStatusNotify;
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
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['OnDemandUrl'])) {
            $model->onDemandUrl = $map['OnDemandUrl'];
        }
        if (isset($map['NeedStatusNotify'])) {
            $model->needStatusNotify = $map['NeedStatusNotify'];
        }

        return $model;
    }
}
