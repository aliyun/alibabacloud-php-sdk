<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListRecyclebinRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description Specifies the returned fields.
     *
     * 1\\. If you set this parameter to \\*, all fields of the file are returned.
     *
     * The default value is a null value, which indicates that only some fields are returned.
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @description The maximum number of results to return. Valid values: 1 to 200. Default value: 50.
     *
     * The number of returned results must be less than or equal to the specified number.
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker. By default, this parameter is left empty.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;
    protected $_name = [
        'driveId'            => 'drive_id',
        'fields'             => 'fields',
        'limit'              => 'limit',
        'marker'             => 'marker',
        'thumbnailProcesses' => 'thumbnail_processes',
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
        if (null !== $this->thumbnailProcesses) {
            $res['thumbnail_processes'] = [];
            if (null !== $this->thumbnailProcesses && \is_array($this->thumbnailProcesses)) {
                foreach ($this->thumbnailProcesses as $key => $val) {
                    $res['thumbnail_processes'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecyclebinRequest
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
        if (isset($map['thumbnail_processes'])) {
            $model->thumbnailProcesses = $map['thumbnail_processes'];
        }

        return $model;
    }
}
