<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddPhoneNumbersRequest extends Model
{
    /**
     * @example dDMD_0mif4hv
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2cb77c29-5f60-4b90-b21e-9d2ba9833f14
     *
     * @var string
     */
    public $numberGroupId;

    /**
     * @example ["0101234****", "0105678****"]
     *
     * @var string
     */
    public $numberList;

    /**
     * @description This parameter is required.
     *
     * @example Bidirection
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'instanceId'    => 'InstanceId',
        'numberGroupId' => 'NumberGroupId',
        'numberList'    => 'NumberList',
        'usage'         => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->numberGroupId) {
            $res['NumberGroupId'] = $this->numberGroupId;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPhoneNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NumberGroupId'])) {
            $model->numberGroupId = $map['NumberGroupId'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
