<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\retries;

use AlibabaCloud\Tea\Model;

class retryRemoteLocalities extends Model
{
    /**
     * @description Specifies whether to allow retries to other localities. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $value;
    protected $_name = [
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryRemoteLocalities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
