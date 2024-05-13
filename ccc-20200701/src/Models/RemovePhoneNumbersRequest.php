<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RemovePhoneNumbersRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example ["0101234****","0105678****"]
     *
     * @var string
     */
    public $numberList;
    protected $_name = [
        'force'      => 'Force',
        'instanceId' => 'InstanceId',
        'numberList' => 'NumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        return $model;
    }
}
