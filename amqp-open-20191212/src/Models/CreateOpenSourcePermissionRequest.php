<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class CreateOpenSourcePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configure;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $read;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vhost;

    /**
     * @var string
     */
    public $write;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'configure' => 'Configure',
        'instanceId' => 'InstanceId',
        'read' => 'Read',
        'userName' => 'UserName',
        'vhost' => 'Vhost',
        'write' => 'Write',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configure) {
            $res['Configure'] = $this->configure;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->read) {
            $res['Read'] = $this->read;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
        }

        if (null !== $this->write) {
            $res['Write'] = $this->write;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Configure'])) {
            $model->configure = $map['Configure'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Read'])) {
            $model->read = $map['Read'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['Vhost'])) {
            $model->vhost = $map['Vhost'];
        }

        if (isset($map['Write'])) {
            $model->write = $map['Write'];
        }

        return $model;
    }
}
