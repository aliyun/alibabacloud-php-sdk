<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponseBody\instanceNameList;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbRdsNameListResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceNameList
     */
    public $instanceNameList;
    protected $_name = [
        'success'          => 'Success',
        'requestId'        => 'RequestId',
        'instanceNameList' => 'InstanceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceNameList) {
            $res['InstanceNameList'] = null !== $this->instanceNameList ? $this->instanceNameList->toMap() : null;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceNameList'])) {
            $model->instanceNameList = instanceNameList::fromMap($map['InstanceNameList']);
        }

        return $model;
    }
}
