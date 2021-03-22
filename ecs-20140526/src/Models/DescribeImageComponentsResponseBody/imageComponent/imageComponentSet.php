<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet\tags;
use AlibabaCloud\Tea\Model;

class imageComponentSet extends Model
{
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
    public $systemType;

    /**
     * @var string
     */
    public $imageComponentId;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'systemType'       => 'SystemType',
        'imageComponentId' => 'ImageComponentId',
        'componentType'    => 'ComponentType',
        'resourceGroupId'  => 'ResourceGroupId',
        'tags'             => 'Tags',
        'name'             => 'Name',
        'content'          => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }
        if (null !== $this->imageComponentId) {
            $res['ImageComponentId'] = $this->imageComponentId;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }
        if (isset($map['ImageComponentId'])) {
            $model->imageComponentId = $map['ImageComponentId'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
