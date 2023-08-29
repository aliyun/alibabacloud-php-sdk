<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class RegisterMessageRequest extends Model
{
    /**
     * @var string
     */
    public $extensions;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $propertyAffiliation;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyPrivateIp;

    /**
     * @var string
     */
    public $propertyPublicIp;

    /**
     * @var string
     */
    public $propertyUuid;
    protected $_name = [
        'extensions'          => 'Extensions',
        'instanceId'          => 'InstanceId',
        'instanceType'        => 'InstanceType',
        'propertyAffiliation' => 'PropertyAffiliation',
        'propertyName'        => 'PropertyName',
        'propertyPrivateIp'   => 'PropertyPrivateIp',
        'propertyPublicIp'    => 'PropertyPublicIp',
        'propertyUuid'        => 'PropertyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->propertyAffiliation) {
            $res['PropertyAffiliation'] = $this->propertyAffiliation;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyPrivateIp) {
            $res['PropertyPrivateIp'] = $this->propertyPrivateIp;
        }
        if (null !== $this->propertyPublicIp) {
            $res['PropertyPublicIp'] = $this->propertyPublicIp;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PropertyAffiliation'])) {
            $model->propertyAffiliation = $map['PropertyAffiliation'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyPrivateIp'])) {
            $model->propertyPrivateIp = $map['PropertyPrivateIp'];
        }
        if (isset($map['PropertyPublicIp'])) {
            $model->propertyPublicIp = $map['PropertyPublicIp'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }

        return $model;
    }
}
