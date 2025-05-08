<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateOpsItemResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $resources;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string[]
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
        'attributes' => 'Attributes',
        'category' => 'Category',
        'createDate' => 'CreateDate',
        'createdBy' => 'CreatedBy',
        'description' => 'Description',
        'lastModifiedBy' => 'LastModifiedBy',
        'opsItemId' => 'OpsItemId',
        'priority' => 'Priority',
        'resourceGroupId' => 'ResourceGroupId',
        'resources' => 'Resources',
        'severity' => 'Severity',
        'solutions' => 'Solutions',
        'source' => 'Source',
        'status' => 'Status',
        'tags' => 'Tags',
        'title' => 'Title',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        if (\is_array($this->solutions)) {
            Model::validateArray($this->solutions);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->solutions) {
            if (\is_array($this->solutions)) {
                $res['Solutions'] = [];
                $n1 = 0;
                foreach ($this->solutions as $item1) {
                    $res['Solutions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = [];
                $n1 = 0;
                foreach ($map['Solutions'] as $item1) {
                    $model->solutions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
