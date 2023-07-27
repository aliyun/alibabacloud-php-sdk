<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultipleObjectsResponseBody extends Model
{
    /**
     * @var DeletedObject[]
     */
    public $deleted;

    /**
     * @example url
     *
     * @var string
     */
    public $encodingType;
    protected $_name = [
        'deleted'      => 'Deleted',
        'encodingType' => 'EncodingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = [];
            if (null !== $this->deleted && \is_array($this->deleted)) {
                $n = 0;
                foreach ($this->deleted as $item) {
                    $res['Deleted'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMultipleObjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deleted'])) {
            if (!empty($map['Deleted'])) {
                $model->deleted = [];
                $n              = 0;
                foreach ($map['Deleted'] as $item) {
                    $model->deleted[$n++] = null !== $item ? DeletedObject::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }

        return $model;
    }
}
