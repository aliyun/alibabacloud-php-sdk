<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $serviceRpcSign;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'serviceRpcSign' => 'ServiceRpcSign',
        'params'         => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceRpcSign) {
            $res['ServiceRpcSign'] = $this->serviceRpcSign;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestHttpApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceRpcSign'])) {
            $model->serviceRpcSign = $map['ServiceRpcSign'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
