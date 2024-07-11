<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateOpsItemResponseBody;

use AlibabaCloud\Tea\Model;

class opsItem extends Model
{
    /**
     * @description The attributes of the O\\&M item.
     *
     * @example {\\"regionId\\":\\"cn-zhangjiakou\\",\\"appId\\":\\"992BKO1X75GRQ4E8\\",\\"instanceId\\":\\"i-8vbcymxagqsyyyjppbr4\\",\\"instance_name\\":\\"cdae\\"}
     *
     * @var string
     */
    public $attributes;

    /**
     * @description The category of the O\\&M item.
     *
     * @example Security
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the O\\&M item was created.
     *
     * @example 2023-03-24T03:55Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The user who created the O\\&M item.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The description of the O\\&M item.
     *
     * @example OpsItem
     *
     * @var string
     */
    public $description;

    /**
     * @description The user who last modified the O\\&M item.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $lastModifiedBy;

    /**
     * @description The ID of the O\\&M item.
     *
     * @example oi-dba9c6eec9254a4d87c1
     *
     * @var string
     */
    public $opsItemId;

    /**
     * @description The priority of the O\\&M item.
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
     * @example [\\"acs:oos:cn-hangzhou:1563457855438522:application/dingTest/applicationgroup/fltest\\"]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The severity level of the O\\&M item.
     *
     * @example Medium
     *
     * @var string
     */
    public $severity;

    /**
     * @description The solutions.
     *
     * @example [{\\n \\\\"priority\\\\":3,\\n \\\\"type\\\\":\\\\"url\\\\",\\n \\\\"url\\\\":\\\\"https://example..com\\\\",\\n \\\\"description\\\\":\\\\"Specify a cross-zone high availability cluster. \\\\"\\n}]
     *
     * @var string
     */
    public $solutions;

    /**
     * @description The source business of the O\\&M item.
     *
     * @example /aliyun/ecs
     *
     * @var string
     */
    public $source;

    /**
     * @description The state of the O\\&M item.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the O\\&M item.
     *
     * @example {"k1": "v1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The title of the O\\&M item.
     *
     * @example ECS reboot is scheduled
     *
     * @var string
     */
    public $title;

    /**
     * @description The time when the O\\&M item was updated.
     *
     * @example 2023-03-24T03:55Z
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
