<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthRequest;

use AlibabaCloud\Tea\Model;

class authJSON extends Model
{
    /**
     * @description The authentication type. If an empty string is passed, no authentication type is available. Valid values:
     *
     *   JWT
     *
     * @example JWT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
