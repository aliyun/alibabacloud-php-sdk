<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;

class controlPlaneConfig extends Model
{
    /**
     * @var string
     */
    public $containerRuntime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $nodePortRange;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'containerRuntime' => 'ContainerRuntime',
        'imageId' => 'ImageId',
        'instanceSpec' => 'InstanceSpec',
        'nodePortRange' => 'NodePortRange',
        'size' => 'Size',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerRuntime) {
            $res['ContainerRuntime'] = $this->containerRuntime;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->nodePortRange) {
            $res['NodePortRange'] = $this->nodePortRange;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['ContainerRuntime'])) {
            $model->containerRuntime = $map['ContainerRuntime'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['NodePortRange'])) {
            $model->nodePortRange = $map['NodePortRange'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
