<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $deleteAfterImageUpload;

    /**
     * @example ImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'deleteAfterImageUpload' => 'DeleteAfterImageUpload',
        'imageName'              => 'ImageName',
        'instanceId'             => 'InstanceId',
        'snapshotId'             => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteAfterImageUpload) {
            $res['DeleteAfterImageUpload'] = $this->deleteAfterImageUpload;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteAfterImageUpload'])) {
            $model->deleteAfterImageUpload = $map['DeleteAfterImageUpload'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
