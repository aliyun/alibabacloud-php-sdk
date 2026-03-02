<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqGroupCreateCmd extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $laneName;

    /**
     * @var int
     */
    public $messageType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'env' => 'env',
        'laneId' => 'laneId',
        'laneName' => 'laneName',
        'messageType' => 'messageType',
        'protocolType' => 'protocolType',
        'remark' => 'remark',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->laneId) {
            $res['laneId'] = $this->laneId;
        }

        if (null !== $this->laneName) {
            $res['laneName'] = $this->laneName;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->protocolType) {
            $res['protocolType'] = $this->protocolType;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['laneId'])) {
            $model->laneId = $map['laneId'];
        }

        if (isset($map['laneName'])) {
            $model->laneName = $map['laneName'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['protocolType'])) {
            $model->protocolType = $map['protocolType'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
