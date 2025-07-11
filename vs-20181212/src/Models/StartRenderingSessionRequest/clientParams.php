<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionRequest;

use AlibabaCloud\Tea\Model;

class clientParams extends Model
{
    /**
     * @example 106.11.43.1
     *
     * @var string
     */
    public $clientIp;
    protected $_name = [
        'clientIp' => 'ClientIp',
    ];

    public function validate() {}

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
     * @return clientParams
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
