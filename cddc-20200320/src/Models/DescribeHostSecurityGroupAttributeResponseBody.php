<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponseBody\secGroupPermission;
use AlibabaCloud\Tea\Model;

class DescribeHostSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secGroupPermission
     */
    public $secGroupPermission;

    /**
     * @var int
     */
    public $success;
    protected $_name = [
        'requestId'          => 'RequestId',
        'secGroupPermission' => 'SecGroupPermission',
        'success'            => 'Success',
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
        if (null !== $this->secGroupPermission) {
            $res['SecGroupPermission'] = null !== $this->secGroupPermission ? $this->secGroupPermission->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostSecurityGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecGroupPermission'])) {
            $model->secGroupPermission = secGroupPermission::fromMap($map['SecGroupPermission']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
