<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressHttpVpcResponseBody extends Model
{
    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $serviceRpcSign;
    protected $_name = [
        'params'         => 'Params',
        'serviceRpcSign' => 'ServiceRpcSign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->serviceRpcSign) {
            $res['ServiceRpcSign'] = $this->serviceRpcSign;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FtDynamicAddressHttpVpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ServiceRpcSign'])) {
            $model->serviceRpcSign = $map['ServiceRpcSign'];
        }

        return $model;
    }
}
