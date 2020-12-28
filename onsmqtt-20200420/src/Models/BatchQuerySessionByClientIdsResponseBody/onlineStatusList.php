<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponseBody;

use AlibabaCloud\Tea\Model;

class onlineStatusList extends Model
{
    /**
     * @var bool
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'onlineStatus' => 'OnlineStatus',
        'clientId'     => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
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
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
