<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponseBody\hostClasses;
use AlibabaCloud\Tea\Model;

class DescribeAvailableDedicatedHostClassesResponseBody extends Model
{
    /**
     * @var hostClasses
     */
    public $hostClasses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostClasses' => 'HostClasses',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostClasses) {
            $res['HostClasses'] = null !== $this->hostClasses ? $this->hostClasses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['HostClasses'])) {
            $model->hostClasses = hostClasses::fromMap($map['HostClasses']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
