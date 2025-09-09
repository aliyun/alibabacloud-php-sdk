<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListResponseBody\ipWhiteList;

class DescribeDrdsDBIpWhiteListResponseBody extends Model
{
    /**
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'ipWhiteList' => 'IpWhiteList',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->ipWhiteList) {
            $this->ipWhiteList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toArray($noStream) : $this->ipWhiteList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
