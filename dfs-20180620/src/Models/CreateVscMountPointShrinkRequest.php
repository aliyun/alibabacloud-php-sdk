<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateVscMountPointShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example e389e5c7-bcb4-4558-846a-e5afc444****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example [
     * "i-bp1g6zv0ce8oghu7****",
     * "i-bp1g6zv0ce8oghu1****"
     * ]
     * @var string
     */
    public $instanceIdsShrink;
    protected $_name = [
        'description'       => 'Description',
        'fileSystemId'      => 'FileSystemId',
        'inputRegionId'     => 'InputRegionId',
        'instanceIdsShrink' => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVscMountPointShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        return $model;
    }
}
