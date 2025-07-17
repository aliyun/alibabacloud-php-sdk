<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;

use AlibabaCloud\Tea\Model;

class jwtPayloadConfig extends Model
{
    /**
     * @var string
     */
    public $payloadKeyName;

    /**
     * @var string
     */
    public $payloadKeyValue;
    protected $_name = [
        'payloadKeyName' => 'payloadKeyName',
        'payloadKeyValue' => 'payloadKeyValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->payloadKeyName) {
            $res['payloadKeyName'] = $this->payloadKeyName;
        }
        if (null !== $this->payloadKeyValue) {
            $res['payloadKeyValue'] = $this->payloadKeyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jwtPayloadConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['payloadKeyName'])) {
            $model->payloadKeyName = $map['payloadKeyName'];
        }
        if (isset($map['payloadKeyValue'])) {
            $model->payloadKeyValue = $map['payloadKeyValue'];
        }

        return $model;
    }
}
