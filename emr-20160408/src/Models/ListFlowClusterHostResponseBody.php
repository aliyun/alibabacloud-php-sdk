<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostResponseBody\hostList;
use AlibabaCloud\Tea\Model;

class ListFlowClusterHostResponseBody extends Model
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
     * @return ListFlowClusterHostResponseBody
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
