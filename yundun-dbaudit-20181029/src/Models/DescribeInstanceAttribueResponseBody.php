<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttribueResponseBody\instanceAttribue;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAttribueResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceAttribue
     */
    public $instanceAttribue;
    protected $_name = [
        'requestId'        => 'RequestId',
        'instanceAttribue' => 'InstanceAttribue',
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
        if (null !== $this->instanceAttribue) {
            $res['InstanceAttribue'] = null !== $this->instanceAttribue ? $this->instanceAttribue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAttribueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceAttribue'])) {
            $model->instanceAttribue = instanceAttribue::fromMap($map['InstanceAttribue']);
        }

        return $model;
    }
}
