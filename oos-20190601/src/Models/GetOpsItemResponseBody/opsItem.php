<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetOpsItemResponseBody;

use AlibabaCloud\Tea\Model;

class opsItem extends Model
{
    /**
     * @description The information about the attributes of the O\\&M item.
     *
     * @var mixed[]
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
     * @description The user who created the O\\&M item.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createBy;

    /**
     * @description The time when the O\\&M item was created.
     *
     * @example 2023-04-10T06:15Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description.
     *
     * @example test-update
     *
     * @var string
     */
    public $description;

    /**
     * @description The user who last modified the O\\&M item.
     *
     * @example modifiedBy
     *
     * @var string
     */
    public $lastModifiedBy;

    /**
     * @description The O\\&M item ID.
     *
     * @example oi-d52b08695e2b46ae8413
     *
     * @var string
     */
    public $opsItemId;

    /**
     * @description The priority of the O\\&M item.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzxkofnlxtn2i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The Alibaba Cloud Resource Names (ARNs) of the associated resources.
     *
     * @var string[]
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
     * @description The solutions to the O\\&M item.
     *
     * @var mixed[][]
     */
    public $solutions;

    /**
     * @description The source business of the O\\&M item.
     *
     * @example /aliyun/appManager
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the O\\&M item.
     *
     * @example Open
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags attached to the O\\&M item.
     *
     * @example {"K1":"V1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The title of the O\\&M item.
     *
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @description The time when the O\\&M item was updated.
     *
     * @example 2023-04-10T06:15Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'attributes'      => 'Attributes',
        'category'        => 'Category',
        'createBy'        => 'CreateBy',
        'createDate'      => 'CreateDate',
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
        if (null !== $this->createBy) {
            $res['CreateBy'] = $this->createBy;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['CreateBy'])) {
            $model->createBy = $map['CreateBy'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
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
