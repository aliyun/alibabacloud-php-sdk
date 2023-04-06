<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListRevisionRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example *
     *
     * @var string
     */
    public $fields;

    /**
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @example 40CB7794C929
     *
     * @var string
     */
    public $marker;
    protected $_name = [
        'driveId' => 'drive_id',
        'fields'  => 'fields',
        'fileId'  => 'file_id',
        'limit'   => 'limit',
        'marker'  => 'marker',
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
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRevisionRequest
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
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        return $model;
    }
}
