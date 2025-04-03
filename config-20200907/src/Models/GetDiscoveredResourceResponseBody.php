<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceResponseBody\discoveredResourceDetail;

class GetDiscoveredResourceResponseBody extends Model
{
    /**
     * @var discoveredResourceDetail
     */
    public $discoveredResourceDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceDetail' => 'DiscoveredResourceDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->discoveredResourceDetail) {
            $this->discoveredResourceDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredResourceDetail) {
            $res['DiscoveredResourceDetail'] = null !== $this->discoveredResourceDetail ? $this->discoveredResourceDetail->toArray($noStream) : $this->discoveredResourceDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DiscoveredResourceDetail'])) {
            $model->discoveredResourceDetail = discoveredResourceDetail::fromMap($map['DiscoveredResourceDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
