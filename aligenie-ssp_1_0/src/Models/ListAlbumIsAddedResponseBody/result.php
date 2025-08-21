<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var string
     */
    public $isAdded;
    protected $_name = [
        'albumId' => 'AlbumId',
        'isAdded' => 'IsAdded',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }

        if (null !== $this->isAdded) {
            $res['IsAdded'] = $this->isAdded;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }

        if (isset($map['IsAdded'])) {
            $model->isAdded = $map['IsAdded'];
        }

        return $model;
    }
}
