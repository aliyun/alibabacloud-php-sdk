<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList;

use AlibabaCloud\Tea\Model;

class consumerGroupClientConnectionInfo extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientIpPort;

    /**
     * @var int
     */
    public $onlineTime;
    protected $_name = [
        'clientId'     => 'ClientId',
        'clientIpPort' => 'ClientIpPort',
        'onlineTime'   => 'OnlineTime',
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
        if (null !== $this->clientIpPort) {
            $res['ClientIpPort'] = $this->clientIpPort;
        }
        if (null !== $this->onlineTime) {
            $res['OnlineTime'] = $this->onlineTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerGroupClientConnectionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIpPort'])) {
            $model->clientIpPort = $map['ClientIpPort'];
        }
        if (isset($map['OnlineTime'])) {
            $model->onlineTime = $map['OnlineTime'];
        }

        return $model;
    }
}
