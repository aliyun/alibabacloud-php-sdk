<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostResponseBody\hostList;
use AlibabaCloud\Tea\Model;

class ListFlowClusterHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostList
     */
    public $hostList;
    protected $_name = [
        'requestId' => 'RequestId',
        'hostList'  => 'HostList',
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
        if (null !== $this->hostList) {
            $res['HostList'] = null !== $this->hostList ? $this->hostList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostList'])) {
            $model->hostList = hostList::fromMap($map['HostList']);
        }

        return $model;
    }
}
