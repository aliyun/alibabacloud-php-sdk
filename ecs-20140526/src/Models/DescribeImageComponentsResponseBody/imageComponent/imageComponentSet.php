<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet\parameters;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet\tags;

class imageComponentSet extends Model
{
    /**
     * @var string
     */
    public $componentType;
    /**
     * @var string
     */
    public $componentVersion;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $imageComponentId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var parameters
     */
    public $parameters;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $systemType;
    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'componentType'    => 'ComponentType',
        'componentVersion' => 'ComponentVersion',
        'content'          => 'Content',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'imageComponentId' => 'ImageComponentId',
        'name'             => 'Name',
        'owner'            => 'Owner',
        'parameters'       => 'Parameters',
        'resourceGroupId'  => 'ResourceGroupId',
        'systemType'       => 'SystemType',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->componentVersion) {
            $res['ComponentVersion'] = $this->componentVersion;
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

        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['ComponentVersion'])) {
            $model->componentVersion = $map['ComponentVersion'];
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

        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
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
