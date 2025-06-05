<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\state;

class containerStatuses extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageID;

    /**
     * @var lastState
     */
    public $lastState;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @var bool
     */
    public $started;

    /**
     * @var state
     */
    public $state;
    protected $_name = [
        'image' => 'Image',
        'imageID' => 'ImageID',
        'lastState' => 'LastState',
        'name' => 'Name',
        'ready' => 'Ready',
        'restartCount' => 'RestartCount',
        'started' => 'Started',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->lastState) {
            $this->lastState->validate();
        }
        if (null !== $this->state) {
            $this->state->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imageID) {
            $res['ImageID'] = $this->imageID;
        }

        if (null !== $this->lastState) {
            $res['LastState'] = null !== $this->lastState ? $this->lastState->toArray($noStream) : $this->lastState;
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
            $res['State'] = null !== $this->state ? $this->state->toArray($noStream) : $this->state;
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
