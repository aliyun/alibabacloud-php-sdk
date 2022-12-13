<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantApplicationRequest extends Model
{
    /**
     * @example DINGDING
     *
     * @var string
     */
    public $channel;

    /**
     * @example 7C56D225-7C34-40BB-9624-C8BA449260E6
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'channel'     => 'channel',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTenantApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
