<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SearchFileRequest extends Model
{
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
    public $query;

    /**
     * @var bool
     */
    public $recursive;

    /**
     * @var bool
     */
    public $returnTotalCount;

    /**
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;
    protected $_name = [
        'driveId' => 'drive_id',
        'fields' => 'fields',
        'limit' => 'limit',
        'marker' => 'marker',
        'orderBy' => 'order_by',
        'query' => 'query',
        'recursive' => 'recursive',
        'returnTotalCount' => 'return_total_count',
        'thumbnailProcesses' => 'thumbnail_processes',
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

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->recursive) {
            $res['recursive'] = $this->recursive;
        }

        if (null !== $this->returnTotalCount) {
            $res['return_total_count'] = $this->returnTotalCount;
        }

        if (null !== $this->thumbnailProcesses) {
            if (\is_array($this->thumbnailProcesses)) {
                $res['thumbnail_processes'] = [];
                foreach ($this->thumbnailProcesses as $key1 => $value1) {
                    $res['thumbnail_processes'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['recursive'])) {
            $model->recursive = $map['recursive'];
        }

        if (isset($map['return_total_count'])) {
            $model->returnTotalCount = $map['return_total_count'];
        }

        if (isset($map['thumbnail_processes'])) {
            if (!empty($map['thumbnail_processes'])) {
                $model->thumbnailProcesses = [];
                foreach ($map['thumbnail_processes'] as $key1 => $value1) {
                    $model->thumbnailProcesses[$key1] = ImageProcess::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
