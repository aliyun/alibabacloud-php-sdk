<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data;

use AlibabaCloud\Tea\Model;

class exchanges extends Model
{
    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $VHostName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $exchangeType;
    protected $_name = [
        'autoDeleteState' => 'AutoDeleteState',
        'createTime'      => 'CreateTime',
        'attributes'      => 'Attributes',
        'VHostName'       => 'VHostName',
        'name'            => 'Name',
        'exchangeType'    => 'ExchangeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->VHostName) {
            $res['VHostName'] = $this->VHostName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->exchangeType) {
            $res['ExchangeType'] = $this->exchangeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exchanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['VHostName'])) {
            $model->VHostName = $map['VHostName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ExchangeType'])) {
            $model->exchangeType = $map['ExchangeType'];
        }

        return $model;
    }
}
