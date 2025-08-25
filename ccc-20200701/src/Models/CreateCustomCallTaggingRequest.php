<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomCallTaggingRequest extends Model
{
    /**
     * @var string
     */
    public $customNumberList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'customNumberList' => 'CustomNumberList',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
