<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddPhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $numberList;

    /**
     * @var string
     */
    public $numberGroupId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'contactFlowId' => 'ContactFlowId',
        'usage'         => 'Usage',
        'numberList'    => 'NumberList',
        'numberGroupId' => 'NumberGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->numberGroupId) {
            $res['NumberGroupId'] = $this->numberGroupId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['NumberGroupId'])) {
            $model->numberGroupId = $map['NumberGroupId'];
        }

        return $model;
    }
}
