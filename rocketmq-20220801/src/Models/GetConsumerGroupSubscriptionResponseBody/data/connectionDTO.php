<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class connectionDTO extends Model
{
    /**
     * @description The client ID.
     *
     * @example 192.168.50.191@19908#-2093249153#1534215565#40385215750900
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The public IP address of the host.
     *
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $egressIp;

    /**
     * @description The host name.
     *
     * @example nginx
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The language used by the client.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The consumption mode of the consumer group. Valid values:
     *
     *   BROADCASTING: broadcasting consumption
     *   CLUSTERING: clustering consumption
     *
     * @example BROADCASTING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @description The client version.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clientId'     => 'clientId',
        'egressIp'     => 'egressIp',
        'hostname'     => 'hostname',
        'language'     => 'language',
        'messageModel' => 'messageModel',
        'version'      => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }
        if (null !== $this->egressIp) {
            $res['egressIp'] = $this->egressIp;
        }
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->messageModel) {
            $res['messageModel'] = $this->messageModel;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }
        if (isset($map['egressIp'])) {
            $model->egressIp = $map['egressIp'];
        }
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['messageModel'])) {
            $model->messageModel = $map['messageModel'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
