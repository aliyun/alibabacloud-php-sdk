<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo;

use AlibabaCloud\Tea\Model;

class internetInfo extends Model
{
    /**
     * @description The IP address whitelist that allows access to the instance over the Internet.
     *
     *   If you do not configure an IP address whitelist, all IP addresses are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *   If you configure an IP address whitelist, only IP addresses in the whitelist are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *
     * @var string[]
     */
    public $ipWhitelist;
    protected $_name = [
        'ipWhitelist' => 'ipWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipWhitelist) {
            $res['ipWhitelist'] = $this->ipWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = $map['ipWhitelist'];
            }
        }

        return $model;
    }
}
