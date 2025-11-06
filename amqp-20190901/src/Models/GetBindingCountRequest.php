<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class GetBindingCountRequest extends Model
{
    /**
     * @var int
     */
    public $bindingType;

    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var bool
     */
    public $upstream;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'bindingType' => 'BindingType',
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'resourceName' => 'ResourceName',
        'upstream' => 'Upstream',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->upstream) {
            $res['Upstream'] = $this->upstream;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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
        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Upstream'])) {
            $model->upstream = $map['Upstream'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
