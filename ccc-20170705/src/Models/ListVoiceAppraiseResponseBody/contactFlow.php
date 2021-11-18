<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow\phoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow\versions;
use AlibabaCloud\Tea\Model;

class contactFlow extends Model
{
    /**
     * @var string
     */
    public $appliedVersion;

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
     * @var phoneNumbers
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $type;

    /**
     * @var versions
     */
    public $versions;
    protected $_name = [
        'appliedVersion'         => 'AppliedVersion',
        'contactFlowDescription' => 'ContactFlowDescription',
        'contactFlowId'          => 'ContactFlowId',
        'contactFlowName'        => 'ContactFlowName',
        'instanceId'             => 'InstanceId',
        'phoneNumbers'           => 'PhoneNumbers',
        'type'                   => 'Type',
        'versions'               => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedVersion) {
            $res['AppliedVersion'] = $this->appliedVersion;
        }
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
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->versions) {
            $res['Versions'] = null !== $this->versions ? $this->versions->toMap() : null;
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
        if (isset($map['AppliedVersion'])) {
            $model->appliedVersion = $map['AppliedVersion'];
        }
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
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Versions'])) {
            $model->versions = versions::fromMap($map['Versions']);
        }

        return $model;
    }
}
