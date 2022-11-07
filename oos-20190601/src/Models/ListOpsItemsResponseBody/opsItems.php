<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListOpsItemsResponseBody;

use AlibabaCloud\Tea\Model;

class opsItems extends Model
{
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
    public $opsItemId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $resources;

    /**
     * @var string
     */
    public $severity;

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
        'category'   => 'Category',
        'createDate' => 'CreateDate',
        'opsItemId'  => 'OpsItemId',
        'priority'   => 'Priority',
        'resources'  => 'Resources',
        'severity'   => 'Severity',
        'source'     => 'Source',
        'status'     => 'Status',
        'tags'       => 'Tags',
        'title'      => 'Title',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->opsItemId) {
            $res['OpsItemId'] = $this->opsItemId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
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
     * @return opsItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['OpsItemId'])) {
            $model->opsItemId = $map['OpsItemId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
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
