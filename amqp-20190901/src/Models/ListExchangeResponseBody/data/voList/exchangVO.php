<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class exchangVO extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var bool
     */
    public $autoDelete;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $exchangeType;

    /**
     * @var bool
     */
    public $internal;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'attributes' => 'Attributes',
        'autoDelete' => 'AutoDelete',
        'canDelete' => 'CanDelete',
        'createTime' => 'CreateTime',
        'exchangeType' => 'ExchangeType',
        'internal' => 'Internal',
        'name' => 'Name',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }

        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
        }

        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->exchangeType) {
            $res['ExchangeType'] = $this->exchangeType;
        }

        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
        }

        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExchangeType'])) {
            $model->exchangeType = $map['ExchangeType'];
        }

        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
