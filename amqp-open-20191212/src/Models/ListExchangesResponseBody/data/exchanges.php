<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data;

use AlibabaCloud\Dara\Model;

class exchanges extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
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
    public $VHostName;
    protected $_name = [
        'attributes' => 'Attributes',
        'autoDeleteState' => 'AutoDeleteState',
        'createTime' => 'CreateTime',
        'exchangeType' => 'ExchangeType',
        'internal' => 'Internal',
        'name' => 'Name',
        'VHostName' => 'VHostName',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
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

        if (null !== $this->VHostName) {
            $res['VHostName'] = $this->VHostName;
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
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
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

        if (isset($map['VHostName'])) {
            $model->VHostName = $map['VHostName'];
        }

        return $model;
    }
}
