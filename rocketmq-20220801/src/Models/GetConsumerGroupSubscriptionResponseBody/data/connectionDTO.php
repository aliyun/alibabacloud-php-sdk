<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data;

use AlibabaCloud\Dara\Model;

class connectionDTO extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $egressIp;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $messageModel;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
