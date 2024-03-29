<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceResponseBody;

use AlibabaCloud\Tea\Model;

class loginPreference extends Model
{
    /**
     * @description The IP address whitelist. CloudSSO users can log on to the CloudSSO user portal only by using the IP addresses in the whitelist.
     *
     * If the return value of this parameter is empty, no IP address whitelists are configured.
     * @example 192.168.0.0/16;10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;
    protected $_name = [
        'loginNetworkMasks' => 'LoginNetworkMasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}
