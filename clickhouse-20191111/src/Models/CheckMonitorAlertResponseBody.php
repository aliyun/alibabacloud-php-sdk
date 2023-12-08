<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckMonitorAlertResponseBody extends Model
{
    /**
     * @example {   "monitor":{     "key1":"value1",     "key2":"value2"   },   "alert":{     "key1":"value1",     "key2":"value2"   } }
     *
     * @var string
     */
    public $parameter;

    /**
     * @example 94F92113-FF63-5E57-8401-6FE123AD11DD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example enable
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'parameter' => 'Parameter',
        'requestId' => 'RequestId',
        'state'     => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameter) {
            $res['Parameter'] = $this->parameter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMonitorAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameter'])) {
            $model->parameter = $map['Parameter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
