<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddPhoneNumberResponseBody\phoneNumber;

use AlibabaCloud\Tea\Model;

class contactFlow extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $contactFlowDescription;

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
    public $contactFlowId;
    protected $_name = [
        'type'                   => 'Type',
        'contactFlowDescription' => 'ContactFlowDescription',
        'contactFlowName'        => 'ContactFlowName',
        'instanceId'             => 'InstanceId',
        'contactFlowId'          => 'ContactFlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->contactFlowDescription) {
            $res['ContactFlowDescription'] = $this->contactFlowDescription;
        }
        if (null !== $this->contactFlowName) {
            $res['ContactFlowName'] = $this->contactFlowName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ContactFlowDescription'])) {
            $model->contactFlowDescription = $map['ContactFlowDescription'];
        }
        if (isset($map['ContactFlowName'])) {
            $model->contactFlowName = $map['ContactFlowName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }

        return $model;
    }
}
