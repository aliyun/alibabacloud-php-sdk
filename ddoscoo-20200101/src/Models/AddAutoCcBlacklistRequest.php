<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class AddAutoCcBlacklistRequest extends Model
{
    /**
     * @var string
     */
    public $blacklist;
    /**
     * @var int
     */
    public $expireTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
