<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList;

use AlibabaCloud\Tea\Model;

class consumerGroupClientConnectionInfo extends Model
{
    /**
     * @description The consumption rate of accumulated messages on a single client of the consumer group. Unit: messages/minute.
     *
     * @example 10
     *
     * @var int
     */
    public $accumulatedConsumeCountPerMinute;

    /**
     * @description The ID of the client.
     *
     * @example 868575026******
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The IP address and port of the client.
     *
     * @example 192.168.1.2:36918
     *
     * @var string
     */
    public $clientIpPort;

    /**
     * @description The last time when the client was online. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1591240546649
     *
     * @var int
     */
    public $onlineTime;

    /**
     * @description The consumption rate of real-time messages on a single client of the consumer group. Unit: messages/minute.
     *
     * @example 5
     *
     * @var int
     */
    public $realTimeConsumeCountPerMinute;
    protected $_name = [
        'accumulatedConsumeCountPerMinute' => 'AccumulatedConsumeCountPerMinute',
        'clientId'                         => 'ClientId',
        'clientIpPort'                     => 'ClientIpPort',
        'onlineTime'                       => 'OnlineTime',
        'realTimeConsumeCountPerMinute'    => 'RealTimeConsumeCountPerMinute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulatedConsumeCountPerMinute) {
            $res['AccumulatedConsumeCountPerMinute'] = $this->accumulatedConsumeCountPerMinute;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientIpPort) {
            $res['ClientIpPort'] = $this->clientIpPort;
        }
        if (null !== $this->onlineTime) {
            $res['OnlineTime'] = $this->onlineTime;
        }
        if (null !== $this->realTimeConsumeCountPerMinute) {
            $res['RealTimeConsumeCountPerMinute'] = $this->realTimeConsumeCountPerMinute;
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
        if (isset($map['AccumulatedConsumeCountPerMinute'])) {
            $model->accumulatedConsumeCountPerMinute = $map['AccumulatedConsumeCountPerMinute'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIpPort'])) {
            $model->clientIpPort = $map['ClientIpPort'];
        }
        if (isset($map['OnlineTime'])) {
            $model->onlineTime = $map['OnlineTime'];
        }
        if (isset($map['RealTimeConsumeCountPerMinute'])) {
            $model->realTimeConsumeCountPerMinute = $map['RealTimeConsumeCountPerMinute'];
        }

        return $model;
    }
}
