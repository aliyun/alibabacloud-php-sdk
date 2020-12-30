<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class CreateAlbumRequest extends Model
{
    /**
     * @var string
     */
    public $albumName;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'albumName' => 'AlbumName',
        'storeName' => 'StoreName',
        'remark'    => 'Remark',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumName) {
            $res['AlbumName'] = $this->albumName;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlbumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumName'])) {
            $model->albumName = $map['AlbumName'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}
