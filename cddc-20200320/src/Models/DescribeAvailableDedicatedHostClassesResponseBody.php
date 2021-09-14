<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponseBody\hostClasses;
use AlibabaCloud\Tea\Model;

class DescribeAvailableDedicatedHostClassesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostClasses
     */
    public $hostClasses;
    protected $_name = [
        'requestId'   => 'RequestId',
        'hostClasses' => 'HostClasses',
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
        if (null !== $this->hostClasses) {
            $res['HostClasses'] = null !== $this->hostClasses ? $this->hostClasses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableDedicatedHostClassesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostClasses'])) {
            $model->hostClasses = hostClasses::fromMap($map['HostClasses']);
        }

        return $model;
    }
}
