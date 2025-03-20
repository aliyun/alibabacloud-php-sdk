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
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The fields of an entry (file or folder) to return.
     *
     * 1\\. If you set this parameter to \\*, all fields are returned.
     *
     * 2\\. If you set this parameter to a null value or leave this parameter empty, the fields, such as file creator, file modifier, and custom tags, are not returned.
     *
     * The default value is a null value, which indicates that only some fields are returned.
     *
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @description The maximum number of entries to return. Valid values: 1 to 200. Default value: 50.
     *
     * The number of returned entries must be less than or equal to the value of this parameter.
     *
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the entry after which the list begins. Entries whose names are alphabetically after the value of this parameter are returned. If you do not specify this parameter, all entries are returned. This parameter is left empty by default.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The thumbnail configurations. Up to five thumbnails can be returned at a time. The value contains key-value pairs. You can customize the keys. The URL of a thumbnail is returned based on the key.
     *
     * @var ImageProcess[]
     */
    public $thumbnailProcesses;
    protected $_name = [
        'driveId' => 'drive_id',
        'fields' => 'fields',
        'limit' => 'limit',
        'marker' => 'marker',
        'thumbnailProcesses' => 'thumbnail_processes',
    ];

    public function validate() {}

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
