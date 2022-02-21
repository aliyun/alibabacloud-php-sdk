<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ResetRenderingDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $podId;
    protected $_name = [
        'imageId'     => 'ImageId',
        'instanceIds' => 'InstanceIds',
        'ownerId'     => 'OwnerId',
        'podId'       => 'PodId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetRenderingDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        return $model;
    }
}
