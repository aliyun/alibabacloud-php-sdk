<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDBClusterResponseBody extends Model
{
    /**
     * @description The details of each PolarDB cluster.
     *
     * @var dbInstance
     */
    public $dbInstance;

    /**
     * @description The ID of the request.
     *
     * @example 60A77FD6-0DE4-4A34-B6FB-9C2673******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dbInstance' => 'DbInstance',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = null !== $this->dbInstance ? $this->dbInstance->toMap() : null;
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
     * @return DescribeDrdsDBClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstance'])) {
            $model->dbInstance = dbInstance::fromMap($map['DbInstance']);
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
