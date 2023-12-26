<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponseBody\clients;

use AlibabaCloud\Tea\Model;

class client extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 10.10.10.1
     *
     * @var string
     */
    public $clientIP;
    protected $_name = [
        'clientIP' => 'ClientIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return client
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }

        return $model;
    }
}
