<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\state;
use AlibabaCloud\Tea\Model;

class containerStatuses extends Model
{
    /**
     * @description The image of the container.
     *
     * @example registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu:18.04
     *
     * @var string
     */
    public $image;

    /**
     * @description The image ID.
     *
     * @example registry-vpc.cn-zhangjiakou.aliyuncs.com/eci_open/ubuntu@sha256:134c7fe821b9d359490cd009ce7ca322453f4f2d018623f849e580a89a685e5d
     *
     * @var string
     */
    public $imageID;

    /**
     * @description The most recent state of the container.
     *
     * @var lastState
     */
    public $lastState;

    /**
     * @description The container name.
     *
     * @example ubuntu
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the container is ready for use.
     *
     * @example true
     *
     * @var bool
     */
    public $ready;

    /**
     * @description The number of restarts.
     *
     * @example 1
     *
     * @var int
     */
    public $restartCount;

    /**
     * @description Indicates whether the container is started.
     *
     * @example true
     *
     * @var bool
     */
    public $started;

    /**
     * @description The state of the container. Valid values:
     *
     *   Waiting
     *   Running
     *   Terminated
     *
     * @var state
     */
    public $state;
    protected $_name = [
        'image'        => 'Image',
        'imageID'      => 'ImageID',
        'lastState'    => 'LastState',
        'name'         => 'Name',
        'ready'        => 'Ready',
        'restartCount' => 'RestartCount',
        'started'      => 'Started',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageID) {
            $res['ImageID'] = $this->imageID;
        }
        if (null !== $this->lastState) {
            $res['LastState'] = null !== $this->lastState ? $this->lastState->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->started) {
            $res['Started'] = $this->started;
        }
        if (null !== $this->state) {
            $res['State'] = null !== $this->state ? $this->state->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageID'])) {
            $model->imageID = $map['ImageID'];
        }
        if (isset($map['LastState'])) {
            $model->lastState = lastState::fromMap($map['LastState']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['Started'])) {
            $model->started = $map['Started'];
        }
        if (isset($map['State'])) {
            $model->state = state::fromMap($map['State']);
        }

        return $model;
    }
}
