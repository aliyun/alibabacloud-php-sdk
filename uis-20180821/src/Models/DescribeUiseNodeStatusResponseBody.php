<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusResponseBody\ipStatusList;
use AlibabaCloud\Tea\Model;

class DescribeUiseNodeStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipStatusList
     */
    public $ipStatusList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ipStatusList' => 'IpStatusList',
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
        if (null !== $this->ipStatusList) {
            $res['IpStatusList'] = null !== $this->ipStatusList ? $this->ipStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUiseNodeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpStatusList'])) {
            $model->ipStatusList = ipStatusList::fromMap($map['IpStatusList']);
        }

        return $model;
    }
}
