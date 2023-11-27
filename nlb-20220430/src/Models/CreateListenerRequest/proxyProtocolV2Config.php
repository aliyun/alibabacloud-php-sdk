<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\CreateListenerRequest;

use AlibabaCloud\Tea\Model;

class proxyProtocolV2Config extends Model
{
    /**
     * @var bool
     */
    public $ppv2PrivateLinkEpIdEnabled;

    /**
     * @var bool
     */
    public $ppv2PrivateLinkEpsIdEnabled;

    /**
     * @var bool
     */
    public $ppv2VpcIdEnabled;
    protected $_name = [
        'ppv2PrivateLinkEpIdEnabled'  => 'Ppv2PrivateLinkEpIdEnabled',
        'ppv2PrivateLinkEpsIdEnabled' => 'Ppv2PrivateLinkEpsIdEnabled',
        'ppv2VpcIdEnabled'            => 'Ppv2VpcIdEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ppv2PrivateLinkEpIdEnabled) {
            $res['Ppv2PrivateLinkEpIdEnabled'] = $this->ppv2PrivateLinkEpIdEnabled;
        }
        if (null !== $this->ppv2PrivateLinkEpsIdEnabled) {
            $res['Ppv2PrivateLinkEpsIdEnabled'] = $this->ppv2PrivateLinkEpsIdEnabled;
        }
        if (null !== $this->ppv2VpcIdEnabled) {
            $res['Ppv2VpcIdEnabled'] = $this->ppv2VpcIdEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyProtocolV2Config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ppv2PrivateLinkEpIdEnabled'])) {
            $model->ppv2PrivateLinkEpIdEnabled = $map['Ppv2PrivateLinkEpIdEnabled'];
        }
        if (isset($map['Ppv2PrivateLinkEpsIdEnabled'])) {
            $model->ppv2PrivateLinkEpsIdEnabled = $map['Ppv2PrivateLinkEpsIdEnabled'];
        }
        if (isset($map['Ppv2VpcIdEnabled'])) {
            $model->ppv2VpcIdEnabled = $map['Ppv2VpcIdEnabled'];
        }

        return $model;
    }
}
