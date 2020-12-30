<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody\envInstanceHealth\instanceHealthList;
use AlibabaCloud\Tea\Model;

class envInstanceHealth extends Model
{
    /**
     * @var bool
     */
    public $enableHealthCheck;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var instanceHealthList
     */
    public $instanceHealthList;
    protected $_name = [
        'enableHealthCheck'  => 'EnableHealthCheck',
        'envName'            => 'EnvName',
        'envId'              => 'EnvId',
        'instanceHealthList' => 'InstanceHealthList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableHealthCheck) {
            $res['EnableHealthCheck'] = $this->enableHealthCheck;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->instanceHealthList) {
            $res['InstanceHealthList'] = null !== $this->instanceHealthList ? $this->instanceHealthList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envInstanceHealth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableHealthCheck'])) {
            $model->enableHealthCheck = $map['EnableHealthCheck'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['InstanceHealthList'])) {
            $model->instanceHealthList = instanceHealthList::fromMap($map['InstanceHealthList']);
        }

        return $model;
    }
}
