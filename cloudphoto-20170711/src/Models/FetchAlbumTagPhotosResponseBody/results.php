<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchAlbumTagPhotosResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $photoIdStr;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $photoId;
    protected $_name = [
        'photoIdStr' => 'PhotoIdStr',
        'mtime'      => 'Mtime',
        'state'      => 'State',
        'photoId'    => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->photoIdStr) {
            $res['PhotoIdStr'] = $this->photoIdStr;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotoIdStr'])) {
            $model->photoIdStr = $map['PhotoIdStr'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['PhotoId'])) {
            $model->photoId = $map['PhotoId'];
        }

        return $model;
    }
}
