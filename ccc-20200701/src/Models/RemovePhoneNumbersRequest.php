<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RemovePhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $numberList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'numberList' => 'NumberList',
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
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemovePhoneNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        return $model;
    }
}
