<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagWithUuidRequest extends Model
{
    /**
     * @description The type of the assets whose tags you want to modify. Valid values:
     *
     *   **ecs**: Elastic Compute Service (ECS) instances or servers that are not deployed on Alibaba Cloud.
     *   **cloud_product**: Alibaba Cloud service.
     *
     * >  If you do not specify this parameter, the default value **ecs** is used.
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description The ID of the tag whose name you want to change.
     *
     * >  You can call the [DescribeGroupedTags](~~DescribeGroupedTags~~) operation to query the IDs of the tags.
     * @example 3897941
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The tag names that you want to change. Separate multiple tag names with commas (,).
     *
     * >  You can call the [DescribeGroupedTags](~~DescribeGroupedTags~~) operation to query the names of the tags that are added to assets.
     * @example ac,ad
     *
     * @var string
     */
    public $tagList;

    /**
     * @description The UUIDs of the assets whose tags you want to modify. Separate multiple UUIDs with commas (,).
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of assets to which the tags are added. If you do not specify this parameter, the tags that are specified in **TagList** parameter are removed from all assets.
     * @example e2737dc3-78f4-4653-a986-dc5fad4b****,c189f0e3-df22-42d5-a73d-02c05667****
     *
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
        'tagId'        => 'TagId',
        'tagList'      => 'TagList',
        'uuidList'     => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTagWithUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagList'])) {
            $model->tagList = $map['TagList'];
        }
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
