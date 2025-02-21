<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;

use AlibabaCloud\Dara\Model;

class destinationEndpoint extends Model
{
    /**
     * @var string
     */
    public $dataBaseName;
    /**
     * @var string
     */
    public $IP;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dataBaseName' => 'DataBaseName',
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'password'     => 'Password',
        'port'         => 'Port',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataBaseName) {
            $res['DataBaseName'] = $this->dataBaseName;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['DataBaseName'])) {
            $model->dataBaseName = $map['DataBaseName'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
