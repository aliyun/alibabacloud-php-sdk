<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\SDK\Location\V20150612\Models\DescribeServicesResponseBody\services;
use AlibabaCloud\Tea\Model;

class DescribeServicesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var services
     */
    public $services;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'services'   => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->services) {
            $res['Services'] = null !== $this->services ? $this->services->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Services'])) {
            $model->services = services::fromMap($map['Services']);
        }

        return $model;
    }
}
