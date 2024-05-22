<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @description Specifies whether to automatically release the instance after the image is packaged and uploaded. Only image builders are supported. Default value: false. Valid values:
     *
     *   true: The image is released when the instance is released.
     *   false: The image is retained when the instance is released.
     *   If you leave this parameter empty, the default value is used.
     *
     * @example false
     *
     * @var string
     */
    public $deleteAfterImageUpload;

    /**
     * @description The name of the image. The name must be 2 to 128 characters in length. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-). It must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     * @example ImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the instance.
     *
     * @example i-5rr1bnyrc4tswr8cq3w6y****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
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
