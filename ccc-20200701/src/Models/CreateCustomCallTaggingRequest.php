<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomCallTaggingRequest extends Model
{
    /**
     * @var string
     */
    public $customNumberList;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'customNumberList' => 'CustomNumberList',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customNumberList) {
            $res['CustomNumberList'] = $this->customNumberList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomCallTaggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomNumberList'])) {
            $model->customNumberList = $map['CustomNumberList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
