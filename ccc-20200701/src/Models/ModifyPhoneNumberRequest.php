<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhoneNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $contactFlowId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'number'        => 'Number',
        'usage'         => 'Usage',
        'contactFlowId' => 'ContactFlowId',
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
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPhoneNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }

        return $model;
    }
}
