<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberResponseBody\phoneNumber;

use AlibabaCloud\Dara\Model;

class contactFlow extends Model
{
    /**
     * @var string
     */
    public $contactFlowDescription;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $contactFlowName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'contactFlowDescription' => 'ContactFlowDescription',
        'contactFlowId' => 'ContactFlowId',
        'contactFlowName' => 'ContactFlowName',
        'instanceId' => 'InstanceId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFlowDescription) {
            $res['ContactFlowDescription'] = $this->contactFlowDescription;
        }

        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }

        if (null !== $this->contactFlowName) {
            $res['ContactFlowName'] = $this->contactFlowName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ContactFlowDescription'])) {
            $model->contactFlowDescription = $map['ContactFlowDescription'];
        }

        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }

        if (isset($map['ContactFlowName'])) {
            $model->contactFlowName = $map['ContactFlowName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
