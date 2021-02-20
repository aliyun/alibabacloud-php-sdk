<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'version'      => 'Version',
        'instanceId'   => 'InstanceId',
        'password'     => 'Password',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
