<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListResponseBody\ipWhiteList;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDBIpWhiteListResponseBody extends Model
{
    /**
     * @description The IP address whitelist.
     *
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @description The ID of the request.
     *
     * @example 017453B9-0001-4745-87BF-DD612D850ED0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'ipWhiteList' => 'IpWhiteList',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = ipWhiteList::fromMap($map['IpWhiteList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
