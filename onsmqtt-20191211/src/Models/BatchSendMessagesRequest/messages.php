<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchSendMessagesRequest;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $receiptId;

    /**
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'id'        => 'Id',
        'payload'   => 'Payload',
        'receiptId' => 'ReceiptId',
        'topics'    => 'Topics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->receiptId) {
            $res['ReceiptId'] = $this->receiptId;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['ReceiptId'])) {
            $model->receiptId = $map['ReceiptId'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = $map['Topics'];
            }
        }

        return $model;
    }
}
