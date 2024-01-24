<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesResponseBody\dbInstances;
use AlibabaCloud\Tea\Model;

class DescribeDrdsRdsInstancesResponseBody extends Model
{
    /**
     * @description The information about the custom ApsaraDB RDS for MySQL instances at the storage layer.
     *
     * @var dbInstances
     */
    public $dbInstances;

    /**
     * @description The ID of the request.
     *
     * @example 123DB16B-02F2-45F7-A571-843991******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dbInstances' => 'DbInstances',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsRdsInstancesResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
