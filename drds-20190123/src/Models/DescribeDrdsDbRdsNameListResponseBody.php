<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponseBody\instanceNameList;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbRdsNameListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceNameList
     */
    public $instanceNameList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'        => 'RequestId',
        'instanceNameList' => 'InstanceNameList',
        'success'          => 'Success',
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
        if (null !== $this->instanceNameList) {
            $res['InstanceNameList'] = null !== $this->instanceNameList ? $this->instanceNameList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceNameList'])) {
            $model->instanceNameList = instanceNameList::fromMap($map['InstanceNameList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
