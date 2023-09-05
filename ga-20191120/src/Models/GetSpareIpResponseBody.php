<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetSpareIpResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6FEA0CF3-D3B9-43E5-A304-D217037876A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the secondary IP address. Valid values:
     *
     *   **active:** The secondary IP address is available.
     *   **inuse:** The secondary IP address is in use.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'requestId' => 'RequestId',
        'state'     => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GetSpareIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
