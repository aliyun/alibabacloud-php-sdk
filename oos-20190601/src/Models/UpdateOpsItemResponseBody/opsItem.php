<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemResponseBody;

use AlibabaCloud\Tea\Model;

class opsItem extends Model
{
    /**
     * @description The attributes of the O\\&M item.
     *
     * @example [{\\"Attribute\\": {\\"Weight\\": 100}, \\"RealServer\\": \\"uaejc8hnqzqz5valyh8dibolpvza48ik.yundunwaf5.com\\"}]
     *
     * @var string
     */
    public $attributes;

    /**
     * @description The category.
     *
     * @example Security
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the O\\&M item was created.
     *
     * @example 2023-03-16T07:04Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The user who created the patch baseline.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The description.
     *
     * @example test-update
     *
     * @var string
     */
    public $description;

    /**
     * @description The user who modified the O\\&M item.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $lastModifiedBy;

    /**
     * @description The ID of the O\\&M item.
     *
     * @example oi-e2264dcf040c472598e9
     *
     * @var string
     */
    public $opsItemId;

    /**
     * @description The priority.
     *
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ARNs of the associated resources.
     *
     * @var string[]
     */
    public $resources;

    /**
     * @description The severity level.
     *
     * @example Medium
     *
     * @var string
     */
    public $severity;

    /**
     * @description The solutions.
     *
     * @var string[]
     */
    public $solutions;

    /**
     * @description The source business.
     *
     * @example /aliyun/ecs
     *
     * @var string
     */
    public $source;

    /**
     * @description The status.
     *
     * @example Open
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The title of the O\\&M item.
     *
     * @example Test
     *
     * @var string
     */
    public $title;

    /**
     * @description The time when the O\\&M item was updated.
     *
     * @example 2023-03-16T08:04Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'attributes'      => 'Attributes',
        'category'        => 'Category',
        'createDate'      => 'CreateDate',
        'createdBy'       => 'CreatedBy',
        'description'     => 'Description',
        'lastModifiedBy'  => 'LastModifiedBy',
        'opsItemId'       => 'OpsItemId',
        'priority'        => 'Priority',
        'resourceGroupId' => 'ResourceGroupId',
        'resources'       => 'Resources',
        'severity'        => 'Severity',
        'solutions'       => 'Solutions',
        'source'          => 'Source',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'title'           => 'Title',
        'updateDate'      => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = $this->lastModifiedBy;
        }
        if (null !== $this->opsItemId) {
            $res['OpsItemId'] = $this->opsItemId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->solutions) {
            $res['Solutions'] = $this->solutions;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opsItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LastModifiedBy'])) {
            $model->lastModifiedBy = $map['LastModifiedBy'];
        }
        if (isset($map['OpsItemId'])) {
            $model->opsItemId = $map['OpsItemId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = $map['Solutions'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
