<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CollectorTargetInstance extends Model
{
    /**
     * @example collectorTargetInstance
     *
     * @var string
     */
    public $configType;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @var string[]
     */
    public $hosts;

    /**
     * @example es-cn-ks8x****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example elasticsearch
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example username
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType'       => 'configType',
        'enableMonitoring' => 'enableMonitoring',
        'hosts'            => 'hosts',
        'instanceId'       => 'instanceId',
        'instanceType'     => 'instanceType',
        'password'         => 'password',
        'protocol'         => 'protocol',
        'userName'         => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }
        if (null !== $this->hosts) {
            $res['hosts'] = $this->hosts;
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

    /**
     * @param array $map
     *
     * @return CollectorTargetInstance
     */
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
                $model->hosts = $map['hosts'];
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
