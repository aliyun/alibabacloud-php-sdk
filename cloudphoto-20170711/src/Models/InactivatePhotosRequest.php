<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class InactivatePhotosRequest extends Model
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
     * @var int
     */
    public $inactiveTime;

    /**
     * @var int[]
     */
    public $photoId;
    protected $_name = [
        'storeName'    => 'StoreName',
        'libraryId'    => 'LibraryId',
        'inactiveTime' => 'InactiveTime',
        'photoId'      => 'PhotoId',
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
        if (null !== $this->inactiveTime) {
            $res['InactiveTime'] = $this->inactiveTime;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InactivatePhotosRequest
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
        if (isset($map['InactiveTime'])) {
            $model->inactiveTime = $map['InactiveTime'];
        }
        if (isset($map['PhotoId'])) {
            if (!empty($map['PhotoId'])) {
                $model->photoId = $map['PhotoId'];
            }
        }

        return $model;
    }
}
