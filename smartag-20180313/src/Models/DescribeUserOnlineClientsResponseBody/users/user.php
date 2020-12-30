<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientsResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $onlineTime;
    protected $_name = [
        'clientIp'   => 'ClientIp',
        'onlineTime' => 'OnlineTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->onlineTime) {
            $res['OnlineTime'] = $this->onlineTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['OnlineTime'])) {
            $model->onlineTime = $map['OnlineTime'];
        }

        return $model;
    }
}
