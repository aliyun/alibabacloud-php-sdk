<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $gatewayServiceIds;
    protected $_name = [
        'gatewayServiceIds' => 'gatewayServiceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayServiceIds) {
            $res['gatewayServiceIds'] = $this->gatewayServiceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceIds'])) {
            if (!empty($map['gatewayServiceIds'])) {
                $model->gatewayServiceIds = $map['gatewayServiceIds'];
            }
        }

        return $model;
    }
}
