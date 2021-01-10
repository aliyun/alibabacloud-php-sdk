<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody\messageAcks;
use AlibabaCloud\Tea\Model;

class ListMessageAcksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageAcks
     */
    public $messageAcks;
    protected $_name = [
        'requestId'   => 'RequestId',
        'messageAcks' => 'MessageAcks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->messageAcks) {
            $res['MessageAcks'] = null !== $this->messageAcks ? $this->messageAcks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageAcksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageAcks'])) {
            $model->messageAcks = messageAcks::fromMap($map['MessageAcks']);
        }

        return $model;
    }
}
