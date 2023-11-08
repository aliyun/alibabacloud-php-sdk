<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data;

use AlibabaCloud\Tea\Model;

class exchanges extends Model
{
    /**
     * @example test
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @example 1580886216000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example DIRECT
     *
     * @var string
     */
    public $exchangeType;

    /**
     * @example amq.direct
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $VHostName;
    protected $_name = [
        'attributes'      => 'Attributes',
        'autoDeleteState' => 'AutoDeleteState',
        'createTime'      => 'CreateTime',
        'exchangeType'    => 'ExchangeType',
        'name'            => 'Name',
        'VHostName'       => 'VHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->VHostName) {
            $res['VHostName'] = $this->VHostName;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VHostName'])) {
            $model->VHostName = $map['VHostName'];
        }

        return $model;
    }
}
