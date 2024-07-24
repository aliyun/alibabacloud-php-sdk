<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchFileRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example url,thumbnail
     *
     * @deprecated
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
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\\
     * By default, this parameter is left empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The field by which to sort the returned results. Default value: created_at. Valid values:
     *
     *   created_at: sorts the results by the time when the file was created.
     *   updated_at: sorts the results by the time when the file was modified.
     *   size: sorts the results by the size of the file.
     *   name: sorts the results by the name of the file.
     *
     * The order in which you want to sort the returned results. Valid values:
     *
     *   ASC: sorts the results in ascending order.
     *   DESC: sorts the results in descending order.
     *
     * You must specify this parameter in the \\<field name> \\<ASC or DESC> format. Separate multiple field names with commas (,). A preceding field has a higher priority than a following field. Examples:
     *
     *   If you want to sort the results based on the file name in ascending order, set this parameter to "name ASC".
     *   If you want to sort the results based on the creation time in descending order, set this parameter to "created_at DESC".
     *   If you want to sort the results based on the creation time in descending order first, and then sort the results based on the file name in ascending order if the creation time is the same, set this parameter to "created_at DESC,name ASC".
     *
     * @example name
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The search condition. Fuzzy searches based on the file name or directory name are supported. The search condition can be up to 4,096 characters in length.
     *
     * This parameter is required.
     * @example not name=123
     *
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $recursive;

    /**
     * @description Specifies whether to return the total number of retrieved files.
     *
     * @example true
     *
     * @var bool
     */
    public $returnTotalCount;
    protected $_name = [
        'driveId'          => 'drive_id',
        'fields'           => 'fields',
        'limit'            => 'limit',
        'marker'           => 'marker',
        'orderBy'          => 'order_by',
        'query'            => 'query',
        'recursive'        => 'recursive',
        'returnTotalCount' => 'return_total_count',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFileRequest
     */
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

        return $model;
    }
}
