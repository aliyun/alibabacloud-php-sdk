<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody\appServers;
use AlibabaCloud\Tea\Model;

class ListUpstreamAppServersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appServers
     */
    public $appServers;
    protected $_name = [
        'requestId'  => 'RequestId',
        'appServers' => 'AppServers',
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
        if (null !== $this->appServers) {
            $res['AppServers'] = null !== $this->appServers ? $this->appServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUpstreamAppServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppServers'])) {
            $model->appServers = appServers::fromMap($map['AppServers']);
        }

        return $model;
    }
}
