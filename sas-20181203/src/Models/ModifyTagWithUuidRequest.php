<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagWithUuidRequest extends Model
{
    /**
     * @description The type of the asset to query. If you do not specify this parameter, the tags of all asset types are queried. Valid values:
     *
     *   **ecs**: server
     *   **cloud_product**: Alibaba Cloud service
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description The ID of the tag that you want to manage.
     *
     * >  You can call the [DescribeGroupedTags](~~DescribeGroupedTags~~) operation to query the IDs of tags.
     * @example 3897941
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The names of the tags that you want to manage. Separate multiple tag names with commas (,).
     *
     * This parameter is required.
     * @example ac,ad
     *
     * @var string
     */
    public $tagList;

    /**
     * @description The details of the server for which you want to manage the tag. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **Target**: the UUID of the server that you want to add or remove.
     *
     *   **targetType**: the method by which the server is added. Valid values:
     *
     *   **uuid**: by server
     *   **groupId**: by server group
     *
     *   **flag**: the operation that you want to perform on the server. Valid values:
     *
     *   **del**: removes the tag from the server.
     *   **add**: adds the tag to the server.
     *
     * @example [{"target":"inet-7c676676-06fa-442e-90fb-b802e5d6****","targetType":"uuid","flag":"add"}]
     *
     * @var string
     */
    public $target;

    /**
     * @description The UUIDs of the servers.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example e2737dc3-78f4-4653-a986-dc5fad4b****,c189f0e3-df22-42d5-a73d-02c05667****
     *
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
        'tagId'        => 'TagId',
        'tagList'      => 'TagList',
        'target'       => 'Target',
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
        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
