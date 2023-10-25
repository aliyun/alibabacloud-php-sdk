<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponseBody\ipNames;
use AlibabaCloud\Tea\Model;

class ListIpOrHostsResponseBody extends Model
{
    /**
     * @description The IP addresses.
     *
     * @var ipNames
     */
    public $ipNames;

    /**
     * @description The ID of the request.
     *
     * @example 1E2B6A4C-6B83-4062-8B6F-AEEC1FC4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipNames'   => 'IpNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipNames) {
            $res['IpNames'] = null !== $this->ipNames ? $this->ipNames->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpOrHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpNames'])) {
            $model->ipNames = ipNames::fromMap($map['IpNames']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
