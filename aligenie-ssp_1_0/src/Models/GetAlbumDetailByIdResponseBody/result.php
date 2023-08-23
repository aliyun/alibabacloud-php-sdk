<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetAlbumDetailByIdResponseBody\result\albumContentList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var albumContentList[]
     */
    public $albumContentList;

    /**
     * @example https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg
     *
     * @var string
     */
    public $albumCoverUrl;

    /**
     * @example 每次一个百科知识或者故事\n丰富孩子的视野，拓展眼界和知识面，培养和孩子的探究能力和好奇心\n\n
     *
     * @var string
     */
    public $albumDescription;

    /**
     * @example 51999575
     *
     * @var string
     */
    public $albumId;

    /**
     * @example 小科学家探索
     *
     * @var string
     */
    public $albumTitle;
    protected $_name = [
        'albumContentList' => 'AlbumContentList',
        'albumCoverUrl'    => 'AlbumCoverUrl',
        'albumDescription' => 'AlbumDescription',
        'albumId'          => 'AlbumId',
        'albumTitle'       => 'AlbumTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumContentList) {
            $res['AlbumContentList'] = [];
            if (null !== $this->albumContentList && \is_array($this->albumContentList)) {
                $n = 0;
                foreach ($this->albumContentList as $item) {
                    $res['AlbumContentList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumContentList'])) {
            if (!empty($map['AlbumContentList'])) {
                $model->albumContentList = [];
                $n                       = 0;
                foreach ($map['AlbumContentList'] as $item) {
                    $model->albumContentList[$n++] = null !== $item ? albumContentList::fromMap($item) : $item;
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
