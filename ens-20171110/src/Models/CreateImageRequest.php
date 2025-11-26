<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateImageRequest extends Model
{
    /**
     * @var string
     */
    public $deleteAfterImageUpload;

    /**
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

    /**
     * @var string
     */
    public $targetOSSRegionId;

    /**
     * @var bool
     */
    public $withDataDisks;
    protected $_name = [
        'deleteAfterImageUpload' => 'DeleteAfterImageUpload',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
        'snapshotId' => 'SnapshotId',
        'targetOSSRegionId' => 'TargetOSSRegionId',
        'withDataDisks' => 'WithDataDisks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->targetOSSRegionId) {
            $res['TargetOSSRegionId'] = $this->targetOSSRegionId;
        }

        if (null !== $this->withDataDisks) {
            $res['WithDataDisks'] = $this->withDataDisks;
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

        if (isset($map['TargetOSSRegionId'])) {
            $model->targetOSSRegionId = $map['TargetOSSRegionId'];
        }

        if (isset($map['WithDataDisks'])) {
            $model->withDataDisks = $map['WithDataDisks'];
        }

        return $model;
    }
}
