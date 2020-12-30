<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ListTagsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'lang'      => 'Lang',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return ListTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
