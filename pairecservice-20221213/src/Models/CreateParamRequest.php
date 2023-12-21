<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateParamRequest extends Model
{
    /**
     * @example Daily
     *
     * @var string
     */
    public $environment;

    /**
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example home
     *
     * @var string
     */
    public $name;

    /**
     * @example 4
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example house
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId'  => 'InstanceId',
        'name'        => 'Name',
        'sceneId'     => 'SceneId',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
