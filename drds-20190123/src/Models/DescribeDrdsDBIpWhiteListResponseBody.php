<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListResponseBody\ipWhiteList;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDBIpWhiteListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ipWhiteList' => 'IpWhiteList',
        'success'     => 'Success',
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
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsDBIpWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = ipWhiteList::fromMap($map['IpWhiteList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
