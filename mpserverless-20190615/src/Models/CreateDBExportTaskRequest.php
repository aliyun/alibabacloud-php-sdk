<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateDBExportTaskRequest extends Model
{
    /**
     * @example article
     *
     * @var string
     */
    public $collection;

    /**
     * @example name,content
     *
     * @var string
     */
    public $fields;

    /**
     * @example CSV
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'collection' => 'Collection',
        'fields'     => 'Fields',
        'fileType'   => 'FileType',
        'spaceId'    => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
