<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponseBody\ipNames;
use AlibabaCloud\Tea\Model;

class ListIpOrHostsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipNames
     */
    public $ipNames;
    protected $_name = [
        'requestId' => 'RequestId',
        'ipNames'   => 'IpNames',
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
        if (null !== $this->ipNames) {
            $res['IpNames'] = null !== $this->ipNames ? $this->ipNames->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpNames'])) {
            $model->ipNames = ipNames::fromMap($map['IpNames']);
        }

        return $model;
    }
}
