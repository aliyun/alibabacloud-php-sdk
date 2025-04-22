<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListFileRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $parentFileId;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'category' => 'category',
        'driveId' => 'drive_id',
        'fields' => 'fields',
        'limit' => 'limit',
        'marker' => 'marker',
        'orderBy' => 'order_by',
        'orderDirection' => 'order_direction',
        'parentFileId' => 'parent_file_id',
        'shareId' => 'share_id',
        'status' => 'status',
        'thumbnailProcesses' => 'thumbnail_processes',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->thumbnailProcesses)) {
            Model::validateArray($this->thumbnailProcesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }

        if (null !== $this->parentFileId) {
            $res['parent_file_id'] = $this->parentFileId;
        }

        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thumbnailProcesses) {
            if (\is_array($this->thumbnailProcesses)) {
                $res['thumbnail_processes'] = [];
                foreach ($this->thumbnailProcesses as $key1 => $value1) {
                    $res['thumbnail_processes'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['fields'])) {
            $model->fields = $map['fields'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        if (isset($map['order_direction'])) {
            $model->orderDirection = $map['order_direction'];
        }

        if (isset($map['parent_file_id'])) {
            $model->parentFileId = $map['parent_file_id'];
        }

        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['thumbnail_processes'])) {
            if (!empty($map['thumbnail_processes'])) {
                $model->thumbnailProcesses = [];
                foreach ($map['thumbnail_processes'] as $key1 => $value1) {
                    $model->thumbnailProcesses[$key1] = ImageProcess::fromMap($value1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
