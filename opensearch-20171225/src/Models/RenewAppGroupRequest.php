<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class RenewAppGroupRequest extends Model
{
    /**
     * @var PrepayOrderInfo
     */
    public $body;

    /**
     * @description Guaranteed request idempotence
     *
     * @example 74db41d8cd3c784209093aa76afbe89e
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'body'        => 'body',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewAppGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = PrepayOrderInfo::fromMap($map['body']);
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
