<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @example 172.17.135.197@17392#1936705963#551717232#9873695589062458
     *
     * @var string
     */
    public $clientId;

    /**
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $egressIp;

    /**
     * @example vos
     *
     * @var string
     */
    public $hostname;

    /**
     * @example java
     *
     * @var string
     */
    public $language;

    /**
     * @example BROADCASTING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @example 1.0
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
     * @return connections
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
