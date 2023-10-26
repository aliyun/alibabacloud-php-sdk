<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ConfigAppResponseBody extends Model
{
    /**
     * @description The result of turning on or off the main switch of the ARMS agent or the main switch status of the ARMS agent. Indicates whether the request was successful. Valid values: success failed The main switch status of the ARMS agent. Valid values: true false
     *
     * @example abc@def success\nghi@jkl success\n
     *
     * @var string
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example 16AF921B-8187-489F-9913-43C808B4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
