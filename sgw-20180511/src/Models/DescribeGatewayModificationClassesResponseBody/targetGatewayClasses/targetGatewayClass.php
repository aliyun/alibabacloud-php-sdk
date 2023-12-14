<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayModificationClassesResponseBody\targetGatewayClasses;

use AlibabaCloud\Tea\Model;

class targetGatewayClass extends Model
{
    /**
     * @example Enhanced
     *
     * @var string
     */
    public $gatewayClass;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAvailable;
    protected $_name = [
        'gatewayClass' => 'GatewayClass',
        'isAvailable'  => 'IsAvailable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayClass) {
            $res['GatewayClass'] = $this->gatewayClass;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetGatewayClass
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayClass'])) {
            $model->gatewayClass = $map['GatewayClass'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        return $model;
    }
}
