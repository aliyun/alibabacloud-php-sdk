<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class UnbindRequest extends Model
{
    /**
     * @var string
     */
    public $bindingKey;

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
    public $dstName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $srcName;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'bindingKey' => 'BindingKey',
        'bindingType' => 'BindingType',
        'consoleSessionId' => 'ConsoleSessionId',
        'dstName' => 'DstName',
        'instanceId' => 'InstanceId',
        'srcName' => 'SrcName',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingKey) {
            $res['BindingKey'] = $this->bindingKey;
        }

        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }

        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->dstName) {
            $res['DstName'] = $this->dstName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->srcName) {
            $res['SrcName'] = $this->srcName;
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
        if (isset($map['BindingKey'])) {
            $model->bindingKey = $map['BindingKey'];
        }

        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }

        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['DstName'])) {
            $model->dstName = $map['DstName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SrcName'])) {
            $model->srcName = $map['SrcName'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
