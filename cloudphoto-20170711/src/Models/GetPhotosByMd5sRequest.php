<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class GetPhotosByMd5sRequest extends Model
{
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

    /**
     * @var string[]
     */
    public $md5;
    protected $_name = [
        'state'     => 'State',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
        'md5'       => 'Md5',
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
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhotosByMd5sRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['Md5'])) {
            if (!empty($map['Md5'])) {
                $model->md5 = $map['Md5'];
            }
        }

        return $model;
    }
}
