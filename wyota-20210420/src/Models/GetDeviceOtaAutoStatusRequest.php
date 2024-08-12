<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceOtaAutoStatusRequest extends Model
{
    /**
     * @var int
     */
    public $clientType;
    protected $_name = [
        'clientType' => 'ClientType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceOtaAutoStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        return $model;
    }
}
