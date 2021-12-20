<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultipleObjectsRequest extends Model
{
    /**
     * @var Delete
     */
    public $body;

    /**
     * @var Delete
     */
    public $delete;

    /**
     * @var string
     */
    public $encodingType;
    protected $_name = [
        'body'         => 'body',
        'delete'       => 'delete',
        'encodingType' => 'encoding-type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->delete) {
            $res['delete'] = null !== $this->delete ? $this->delete->toMap() : null;
        }
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMultipleObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = Delete::fromMap($map['body']);
        }
        if (isset($map['delete'])) {
            $model->delete = Delete::fromMap($map['delete']);
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }

        return $model;
    }
}
