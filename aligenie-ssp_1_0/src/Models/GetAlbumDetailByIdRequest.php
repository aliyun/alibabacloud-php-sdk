<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetAlbumDetailByIdRequest extends Model
{
    /**
     * @var string
     */
    public $albumId;
    protected $_name = [
        'albumId' => 'AlbumId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlbumDetailByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }

        return $model;
    }
}
