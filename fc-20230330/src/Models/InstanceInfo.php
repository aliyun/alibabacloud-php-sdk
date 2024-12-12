<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class InstanceInfo extends Model
{
    /**
     * @var int
     */
    public $createdTimeMs;

    /**
     * @var int
     */
    public $destroyedTimeMs;

    /**
     * @example 1ef6b6ff-7f7b-485e-ab49-501ac681****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createdTimeMs'   => 'createdTimeMs',
        'destroyedTimeMs' => 'destroyedTimeMs',
        'instanceId'      => 'instanceId',
        'qualifier'       => 'qualifier',
        'status'          => 'status',
        'versionId'       => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTimeMs) {
            $res['createdTimeMs'] = $this->createdTimeMs;
        }
        if (null !== $this->destroyedTimeMs) {
            $res['destroyedTimeMs'] = $this->destroyedTimeMs;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTimeMs'])) {
            $model->createdTimeMs = $map['createdTimeMs'];
        }
        if (isset($map['destroyedTimeMs'])) {
            $model->destroyedTimeMs = $map['destroyedTimeMs'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
