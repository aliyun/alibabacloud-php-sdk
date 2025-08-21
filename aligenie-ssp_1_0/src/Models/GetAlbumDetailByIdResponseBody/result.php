<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody\result\albumContentList;

class result extends Model
{
    /**
     * @var albumContentList[]
     */
    public $albumContentList;

    /**
     * @var string
     */
    public $albumCoverUrl;

    /**
     * @var string
     */
    public $albumDescription;

    /**
     * @var string
     */
    public $albumId;

    /**
     * @var string
     */
    public $albumTitle;
    protected $_name = [
        'albumContentList' => 'AlbumContentList',
        'albumCoverUrl' => 'AlbumCoverUrl',
        'albumDescription' => 'AlbumDescription',
        'albumId' => 'AlbumId',
        'albumTitle' => 'AlbumTitle',
    ];

    public function validate()
    {
        if (\is_array($this->albumContentList)) {
            Model::validateArray($this->albumContentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albumContentList) {
            if (\is_array($this->albumContentList)) {
                $res['AlbumContentList'] = [];
                $n1 = 0;
                foreach ($this->albumContentList as $item1) {
                    $res['AlbumContentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->albumCoverUrl) {
            $res['AlbumCoverUrl'] = $this->albumCoverUrl;
        }

        if (null !== $this->albumDescription) {
            $res['AlbumDescription'] = $this->albumDescription;
        }

        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }

        if (null !== $this->albumTitle) {
            $res['AlbumTitle'] = $this->albumTitle;
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
        if (isset($map['AlbumContentList'])) {
            if (!empty($map['AlbumContentList'])) {
                $model->albumContentList = [];
                $n1 = 0;
                foreach ($map['AlbumContentList'] as $item1) {
                    $model->albumContentList[$n1] = albumContentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlbumCoverUrl'])) {
            $model->albumCoverUrl = $map['AlbumCoverUrl'];
        }

        if (isset($map['AlbumDescription'])) {
            $model->albumDescription = $map['AlbumDescription'];
        }

        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }

        if (isset($map['AlbumTitle'])) {
            $model->albumTitle = $map['AlbumTitle'];
        }

        return $model;
    }
}
