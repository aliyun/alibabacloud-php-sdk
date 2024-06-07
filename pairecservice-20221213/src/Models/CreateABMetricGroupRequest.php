<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateABMetricGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1,2
     *
     * @var string
     */
    public $ABMetricIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example visits
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $realtime;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'ABMetricIds' => 'ABMetricIds',
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'name'        => 'Name',
        'realtime'    => 'Realtime',
        'sceneId'     => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricIds) {
            $res['ABMetricIds'] = $this->ABMetricIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->realtime) {
            $res['Realtime'] = $this->realtime;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateABMetricGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricIds'])) {
            $model->ABMetricIds = $map['ABMetricIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Realtime'])) {
            $model->realtime = $map['Realtime'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
