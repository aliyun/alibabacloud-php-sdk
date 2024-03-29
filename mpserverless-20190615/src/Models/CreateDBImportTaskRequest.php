<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateDBImportTaskRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $collection;

    /**
     * @example CSV
     *
     * @var string
     */
    public $fileType;

    /**
     * @example UPSERT
     *
     * @var string
     */
    public $mode;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'collection' => 'Collection',
        'fileType'   => 'FileType',
        'mode'       => 'Mode',
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
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBImportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
