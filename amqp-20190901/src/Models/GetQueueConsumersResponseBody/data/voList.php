<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueConsumersResponseBody\data;

use AlibabaCloud\Dara\Model;

class voList extends Model
{
    /**
     * @var string
     */
    public $clientAddress;

    /**
     * @var string
     */
    public $consumerTag;

    /**
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'clientAddress' => 'ClientAddress',
        'consumerTag' => 'ConsumerTag',
        'gmtCreate' => 'GmtCreate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientAddress) {
            $res['ClientAddress'] = $this->clientAddress;
        }

        if (null !== $this->consumerTag) {
            $res['ConsumerTag'] = $this->consumerTag;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['ClientAddress'])) {
            $model->clientAddress = $map['ClientAddress'];
        }

        if (isset($map['ConsumerTag'])) {
            $model->consumerTag = $map['ConsumerTag'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
