<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListServicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $serviceList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'serviceList' => 'ServiceList',
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
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceList'])) {
            if (!empty($map['ServiceList'])) {
                $model->serviceList = $map['ServiceList'];
            }
        }

        return $model;
    }
}
