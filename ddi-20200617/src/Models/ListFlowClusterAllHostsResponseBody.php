<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllHostsResponseBody\hostList;
use AlibabaCloud\Tea\Model;

class ListFlowClusterAllHostsResponseBody extends Model
{
    /**
     * @var hostList
     */
    public $hostList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostList'  => 'HostList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostList) {
            $res['HostList'] = null !== $this->hostList ? $this->hostList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowClusterAllHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostList'])) {
            $model->hostList = hostList::fromMap($map['HostList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
