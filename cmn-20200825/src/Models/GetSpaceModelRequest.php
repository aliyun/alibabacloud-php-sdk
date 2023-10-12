<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetSpaceModelRequest extends Model
{
    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example spaceModelId
     *
     * @var string
     */
    public $spaceModelId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'spaceModelId' => 'SpaceModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->spaceModelId) {
            $res['SpaceModelId'] = $this->spaceModelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpaceModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SpaceModelId'])) {
            $model->spaceModelId = $map['SpaceModelId'];
        }

        return $model;
    }
}
