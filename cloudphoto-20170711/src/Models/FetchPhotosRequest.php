<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class FetchPhotosRequest extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'state'     => 'State',
        'orderBy'   => 'OrderBy',
        'order'     => 'Order',
        'size'      => 'Size',
        'page'      => 'Page',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
     * @return FetchPhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
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
