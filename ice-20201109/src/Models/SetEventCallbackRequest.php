<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SetEventCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $callbackQueueName;
    protected $_name = [
        'callbackQueueName' => 'CallbackQueueName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackQueueName) {
            $res['CallbackQueueName'] = $this->callbackQueueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEventCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackQueueName'])) {
            $model->callbackQueueName = $map['CallbackQueueName'];
        }

        return $model;
    }
}
