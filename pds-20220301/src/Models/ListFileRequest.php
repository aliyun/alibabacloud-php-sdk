<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListFileRequest extends Model
{
    /**
     * @description The category of the file. Valid values:
     *
     * By default, files of all categories are returned.
     * @example image
     *
     * @var string
     */
    public $category;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The fields to return.
     *
     * 1.  If this parameter is set to \*, all fields of the file except the fields that must be specified are returned.
     * By default, all fields except the fields that must be specified are returned.
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @description The maximum number of results to return. Valid values: 1 to 100.
     *
     * The number of returned results must be less than or equal to the specified number.
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\
     * By default, this parameter is empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The sorting field.
     *
     * Valid values:
     *
     *   updated_at
     *
     * .
     *
     *   size
     *
     * .
     *
     *   name
     *
     * .
     *
     *   created_at
     *
     * .
     * @example updated_at
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The sorting direction. Valid values:
     *
     * Default value: ASC.
     * @example ASC
     *
     * @var string
     */
    public $orderDirection;

    /**
     * @description The ID of the parent folder. If the parent folder is a root directory, set this parameter to root.
     *
     * @example root
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @description The share ID. If you want to manage a file by using a share link, carry the `x-share-token` header for authentication in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify one of `share_id` and `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The state of the file. Valid values:
     *
     * By default, only files in the available state are returned.
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @description The thumbnail configurations. Up to five thumbnails can be returned at a time. The value contains key-value pairs. You can customize the keys. The URL of a thumbnail is returned based on the key.
     *
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;

    /**
     * @description The type of the file. Valid values:
     *
     * By default, files of all types are returned.
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'           => 'category',
        'driveId'            => 'drive_id',
        'fields'             => 'fields',
        'limit'              => 'limit',
        'marker'             => 'marker',
        'orderBy'            => 'order_by',
        'orderDirection'     => 'order_direction',
        'parentFileId'       => 'parent_file_id',
        'shareId'            => 'share_id',
        'status'             => 'status',
        'thumbnailProcesses' => 'thumbnail_processes',
        'type'               => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['thumbnail_processes'] = [];
            if (null !== $this->thumbnailProcesses && \is_array($this->thumbnailProcesses)) {
                foreach ($this->thumbnailProcesses as $key => $val) {
                    $res['thumbnail_processes'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileRequest
     */
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
            $model->thumbnailProcesses = $map['thumbnail_processes'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
