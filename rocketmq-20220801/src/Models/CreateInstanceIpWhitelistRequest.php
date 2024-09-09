<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceIpWhitelistRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $ipWhitelists;
    protected $_name = [
        'ipWhitelists' => 'ipWhitelists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipWhitelists) {
            $res['ipWhitelists'] = $this->ipWhitelists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceIpWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = $map['ipWhitelists'];
            }
        }

        return $model;
    }
}
