<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesResponseBody\dbInstances;
use AlibabaCloud\Tea\Model;

class DescribeRdsSuperAccountInstancesResponseBody extends Model
{
    /**
     * @description The privileged accounts.
     *
     * @var dbInstances
     */
    public $dbInstances;

    /**
     * @description The ID of the request.
     *
     * @example 5D64DE5944A1E541E0******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbInstances' => 'DbInstances',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstances) {
            $res['DbInstances'] = null !== $this->dbInstances ? $this->dbInstances->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsSuperAccountInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstances'])) {
            $model->dbInstances = dbInstances::fromMap($map['DbInstances']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
