<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class EditPhotosRequest extends Model
{
    /**
     * @var int
     */
    public $shareExpireTime;

    /**
     * @var int
     */
    public $takenAt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var int[]
     */
    public $photoId;
    protected $_name = [
        'shareExpireTime' => 'ShareExpireTime',
        'takenAt'         => 'TakenAt',
        'title'           => 'Title',
        'remark'          => 'Remark',
        'storeName'       => 'StoreName',
        'libraryId'       => 'LibraryId',
        'photoId'         => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareExpireTime) {
            $res['ShareExpireTime'] = $this->shareExpireTime;
        }
        if (null !== $this->takenAt) {
            $res['TakenAt'] = $this->takenAt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditPhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShareExpireTime'])) {
            $model->shareExpireTime = $map['ShareExpireTime'];
        }
        if (isset($map['TakenAt'])) {
            $model->takenAt = $map['TakenAt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['PhotoId'])) {
            if (!empty($map['PhotoId'])) {
                $model->photoId = $map['PhotoId'];
            }
        }

        return $model;
    }
}
