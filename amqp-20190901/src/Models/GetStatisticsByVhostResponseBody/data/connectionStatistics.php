<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data\connectionStatistics\channelStatisticsList;

class connectionStatistics extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var int
     */
    public $channelNum;

    /**
     * @var channelStatisticsList
     */
    public $channelStatisticsList;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var float
     */
    public $deliverQps;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var float
     */
    public $publishQps;

    /**
     * @var string
     */
    public $remoteAddress;

    /**
     * @var bool
     */
    public $securityTransport;

    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'channelNum' => 'ChannelNum',
        'channelStatisticsList' => 'ChannelStatisticsList',
        'connectionName' => 'ConnectionName',
        'deliverQps' => 'DeliverQps',
        'protocol' => 'Protocol',
        'publishQps' => 'PublishQps',
        'remoteAddress' => 'RemoteAddress',
        'securityTransport' => 'SecurityTransport',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->channelStatisticsList) {
            $this->channelStatisticsList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->channelNum) {
            $res['ChannelNum'] = $this->channelNum;
        }

        if (null !== $this->channelStatisticsList) {
            $res['ChannelStatisticsList'] = null !== $this->channelStatisticsList ? $this->channelStatisticsList->toArray($noStream) : $this->channelStatisticsList;
        }

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->deliverQps) {
            $res['DeliverQps'] = $this->deliverQps;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->publishQps) {
            $res['PublishQps'] = $this->publishQps;
        }

        if (null !== $this->remoteAddress) {
            $res['RemoteAddress'] = $this->remoteAddress;
        }

        if (null !== $this->securityTransport) {
            $res['SecurityTransport'] = $this->securityTransport;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['ChannelNum'])) {
            $model->channelNum = $map['ChannelNum'];
        }

        if (isset($map['ChannelStatisticsList'])) {
            $model->channelStatisticsList = channelStatisticsList::fromMap($map['ChannelStatisticsList']);
        }

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['DeliverQps'])) {
            $model->deliverQps = $map['DeliverQps'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PublishQps'])) {
            $model->publishQps = $map['PublishQps'];
        }

        if (isset($map['RemoteAddress'])) {
            $model->remoteAddress = $map['RemoteAddress'];
        }

        if (isset($map['SecurityTransport'])) {
            $model->securityTransport = $map['SecurityTransport'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
