<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerStackRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 172.26.76.48@Lqd7dImlp9KJ5V84
     *
     * @var string
     */
    public $clientId;
    protected $_name = [
        'clientId' => 'clientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        return $model;
    }
}
