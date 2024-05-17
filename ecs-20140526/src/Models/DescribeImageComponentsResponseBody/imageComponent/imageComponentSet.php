<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet\tags;
use AlibabaCloud\Tea\Model;

class imageComponentSet extends Model
{
    /**
     * @description The type of the image component.
     *
     * @example Build
     *
     * @var string
     */
    public $componentType;

    /**
     * @description The content of the image component.
     *
     * @example RESTART
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the image component was created.
     *
     * @example 2020-11-24T06:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the image component.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the image component.
     *
     * @example ic-bp67acfmxazb4p****
     *
     * @var string
     */
    public $imageComponentId;

    /**
     * @description The name of the image component.
     *
     * @example testComponent
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the image component. Valid values:
     *
     *   SELF: the custom component that you created.
     *   ALIYUN: the system component provided by Alibaba Cloud.
     *
     * @example SELF
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the resource group to which the image component belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the operating system supported by the image component.
     *
     * @example Linux
     *
     * @var string
     */
    public $systemType;

    /**
     * @description The tags of the image component.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'componentType'    => 'ComponentType',
        'content'          => 'Content',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'imageComponentId' => 'ImageComponentId',
        'name'             => 'Name',
        'owner'            => 'Owner',
        'resourceGroupId'  => 'ResourceGroupId',
        'systemType'       => 'SystemType',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageComponentId) {
            $res['ImageComponentId'] = $this->imageComponentId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageComponentSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageComponentId'])) {
            $model->imageComponentId = $map['ImageComponentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
