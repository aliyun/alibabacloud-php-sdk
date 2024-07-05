<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceRequest;

use AlibabaCloud\Tea\Model;

class clientInfo extends Model
{
    /**
     * @example 172.21.128.110
     *
     * @var string
     */
    public $clientIp;
    protected $_name = [
        'clientIp' => 'ClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        return $model;
    }
}
