<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponse\clientConnectionStatusList;

use AlibabaCloud\Tea\Model;

class consumerGroupClientConnectionInfo extends Model
{
    /**
     * @var int
     */
    public $accumulatedConsumeCountPerMinute;

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

    /**
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
        Model::validateRequired('accumulatedConsumeCountPerMinute', $this->accumulatedConsumeCountPerMinute, true);
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('clientIpPort', $this->clientIpPort, true);
        Model::validateRequired('onlineTime', $this->onlineTime, true);
        Model::validateRequired('realTimeConsumeCountPerMinute', $this->realTimeConsumeCountPerMinute, true);
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
