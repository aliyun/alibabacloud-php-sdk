<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttRootTopicsResponseBody\rootTopics;
use AlibabaCloud\Tea\Model;

class ListMqttRootTopicsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rootTopics
     */
    public $rootTopics;
    protected $_name = [
        'requestId'  => 'RequestId',
        'rootTopics' => 'RootTopics',
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
        if (null !== $this->rootTopics) {
            $res['RootTopics'] = null !== $this->rootTopics ? $this->rootTopics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMqttRootTopicsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootTopics'])) {
            $model->rootTopics = rootTopics::fromMap($map['RootTopics']);
        }

        return $model;
    }
}
