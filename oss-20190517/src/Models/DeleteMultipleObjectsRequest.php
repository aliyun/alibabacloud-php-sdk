<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultipleObjectsRequest extends Model
{
    /**
     * @var Delete
     */
    public $delete;

    /**
     * @example url
     *
     * @var string
     */
    public $encodingType;
    protected $_name = [
        'delete'       => 'Delete',
        'encodingType' => 'encoding-type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delete) {
            $res['Delete'] = null !== $this->delete ? $this->delete->toMap() : null;
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
        if (isset($map['Delete'])) {
            $model->delete = Delete::fromMap($map['Delete']);
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }

        return $model;
    }
}
