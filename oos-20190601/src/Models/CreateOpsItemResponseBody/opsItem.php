<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemResponseBody;

use AlibabaCloud\Tea\Model;

class opsItem extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastModifiedBy;

    /**
     * @var string
     */
    public $opsItemId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $solutions;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
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
            $model->resources = $map['Resources'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Solutions'])) {
            $model->solutions = $map['Solutions'];
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
