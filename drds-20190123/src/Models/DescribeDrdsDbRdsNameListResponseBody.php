<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponseBody\instanceNameList;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbRdsNameListResponseBody extends Model
{
    /**
     * @description Indicates the instances that are used to store the data of a database.
     *
     * @var instanceNameList
     */
    public $instanceNameList;

    /**
     * @description Indicates the ID of the request.
     *
     * @example 7E6FA2BF-05F2-44DD-95C0-D1B5B8xxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'instanceNameList' => 'InstanceNameList',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNameList) {
            $res['InstanceNameList'] = null !== $this->instanceNameList ? $this->instanceNameList->toMap() : null;
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
     * @return DescribeDrdsDbRdsNameListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceNameList'])) {
            $model->instanceNameList = instanceNameList::fromMap($map['InstanceNameList']);
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
