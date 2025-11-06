<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingErrorByTaskIdResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class bindingErrorDO extends Model
{
    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $routingKey;

    /**
     * @var string
     */
    public $src;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'destination' => 'Destination',
        'destinationType' => 'DestinationType',
        'errorMessage' => 'ErrorMessage',
        'routingKey' => 'RoutingKey',
        'src' => 'Src',
        'taskId' => 'TaskId',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = $this->routingKey;
        }

        if (null !== $this->src) {
            $res['Src'] = $this->src;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = $map['RoutingKey'];
        }

        if (isset($map['Src'])) {
            $model->src = $map['Src'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
