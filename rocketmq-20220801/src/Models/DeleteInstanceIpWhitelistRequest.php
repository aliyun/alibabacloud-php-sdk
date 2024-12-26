<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceIpWhitelistRequest extends Model
{
    /**
     * @description The IP address whitelist.
     *
     * This parameter is required.
     * @example 0.0.0.0/0
     *
     * @var string
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
     * @return DeleteInstanceIpWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipWhitelist'])) {
            $model->ipWhitelist = $map['ipWhitelist'];
        }

        return $model;
    }
}
