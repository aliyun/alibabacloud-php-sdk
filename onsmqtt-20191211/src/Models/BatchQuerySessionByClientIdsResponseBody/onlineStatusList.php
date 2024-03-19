<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchQuerySessionByClientIdsResponseBody;

use AlibabaCloud\Tea\Model;

class onlineStatusList extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var bool
     */
    public $onlineStatus;
    protected $_name = [
        'clientId'     => 'ClientId',
        'onlineStatus' => 'OnlineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }

        return $model;
    }
}
