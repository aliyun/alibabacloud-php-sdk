<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeErrorByTaskIdResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class exchangeErrorDO extends Model
{
    /**
     * @var int
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
     */
    public $exchangeType;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'exchangeName' => 'ExchangeName',
        'exchangeType' => 'ExchangeType',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }

        if (null !== $this->exchangeType) {
            $res['ExchangeType'] = $this->exchangeType;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }

        if (isset($map['ExchangeType'])) {
            $model->exchangeType = $map['ExchangeType'];
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
