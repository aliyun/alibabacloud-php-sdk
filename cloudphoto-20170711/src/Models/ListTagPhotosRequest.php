<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ListTagPhotosRequest extends Model
{
    /**
     * @var int
     */
    public $tagId;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'tagId'     => 'TagId',
        'direction' => 'Direction',
        'size'      => 'Size',
        'cursor'    => 'Cursor',
        'state'     => 'State',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagPhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}
