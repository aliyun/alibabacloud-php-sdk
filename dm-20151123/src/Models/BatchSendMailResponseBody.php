<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $envId;
    protected $_name = [
        'requestId' => 'RequestId',
        'envId'     => 'EnvId',
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
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSendMailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
