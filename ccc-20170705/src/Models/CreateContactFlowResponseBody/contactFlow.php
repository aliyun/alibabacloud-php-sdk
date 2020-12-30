<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowResponseBody\contactFlow\phoneNumbers;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateContactFlowResponseBody\contactFlow\versions;
use AlibabaCloud\Tea\Model;

class contactFlow extends Model
{
    /**
     * @var string
     */
    public $contactFlowDescription;

    /**
     * @var string
     */
    public $type;

    /**
     * @var phoneNumbers
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $contactFlowName;

    /**
     * @var versions
     */
    public $versions;

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
    public $appliedVersion;
    protected $_name = [
        'contactFlowDescription' => 'ContactFlowDescription',
        'type'                   => 'Type',
        'phoneNumbers'           => 'PhoneNumbers',
        'contactFlowName'        => 'ContactFlowName',
        'versions'               => 'Versions',
        'instanceId'             => 'InstanceId',
        'contactFlowId'          => 'ContactFlowId',
        'appliedVersion'         => 'AppliedVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowDescription) {
            $res['ContactFlowDescription'] = $this->contactFlowDescription;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->contactFlowName) {
            $res['ContactFlowName'] = $this->contactFlowName;
        }
        if (null !== $this->versions) {
            $res['Versions'] = null !== $this->versions ? $this->versions->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->appliedVersion) {
            $res['AppliedVersion'] = $this->appliedVersion;
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
        if (isset($map['ContactFlowDescription'])) {
            $model->contactFlowDescription = $map['ContactFlowDescription'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }
        if (isset($map['ContactFlowName'])) {
            $model->contactFlowName = $map['ContactFlowName'];
        }
        if (isset($map['Versions'])) {
            $model->versions = versions::fromMap($map['Versions']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['AppliedVersion'])) {
            $model->appliedVersion = $map['AppliedVersion'];
        }

        return $model;
    }
}
