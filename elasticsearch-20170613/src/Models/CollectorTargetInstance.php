<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class CollectorTargetInstance extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @var string[]
     */
    public $hosts;

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
    public $protocol;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType' => 'configType',
        'enableMonitoring' => 'enableMonitoring',
        'hosts' => 'hosts',
        'instanceId' => 'instanceId',
        'instanceType' => 'instanceType',
        'password' => 'password',
        'protocol' => 'protocol',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }

        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['hosts'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['enableMonitoring'])) {
            $model->enableMonitoring = $map['enableMonitoring'];
        }

        if (isset($map['hosts'])) {
            if (!empty($map['hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['hosts'] as $item1) {
                    $model->hosts[$n1++] = $item1;
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
