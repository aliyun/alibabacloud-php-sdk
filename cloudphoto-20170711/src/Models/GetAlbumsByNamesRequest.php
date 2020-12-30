<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class GetAlbumsByNamesRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string[]
     */
    public $name;
    protected $_name = [
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlbumsByNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['Name'])) {
            if (!empty($map['Name'])) {
                $model->name = $map['Name'];
            }
        }

        return $model;
    }
}
