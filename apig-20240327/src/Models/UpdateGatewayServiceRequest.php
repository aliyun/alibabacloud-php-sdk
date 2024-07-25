<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayServiceRequest extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @example 8080
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'addresses' => 'addresses',
        'port'      => 'port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['addresses'] = $this->addresses;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = $map['addresses'];
            }
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
