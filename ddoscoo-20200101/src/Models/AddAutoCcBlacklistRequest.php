<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddAutoCcBlacklistRequest extends Model
{
    /**
     * @example [{"src":"198.51.XX.XX"},{"src":"198.52.XX.XX"}]
     *
     * @var string
     */
    public $blacklist;

    /**
     * @example 300
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'blacklist'  => 'Blacklist',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blacklist) {
            $res['Blacklist'] = $this->blacklist;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAutoCcBlacklistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blacklist'])) {
            $model->blacklist = $map['Blacklist'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
