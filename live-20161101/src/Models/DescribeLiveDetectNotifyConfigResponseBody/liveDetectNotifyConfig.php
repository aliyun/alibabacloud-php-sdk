<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectNotifyConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveDetectNotifyConfig extends Model
{
    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'notifyUrl'  => 'NotifyUrl',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return liveDetectNotifyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
