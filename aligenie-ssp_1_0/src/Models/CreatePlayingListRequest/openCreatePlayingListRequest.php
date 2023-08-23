<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest\openCreatePlayingListRequest\contentList;
use AlibabaCloud\Tea\Model;

class openCreatePlayingListRequest extends Model
{
    /**
     * @var contentList[]
     */
    public $contentList;

    /**
     * @example content
     *
     * @var string
     */
    public $contentType;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example true
     *
     * @var bool
     */
    public $needAlbumContinued;

    /**
     * @example default
     *
     * @var string
     */
    public $playFrom;

    /**
     * @example Repeat
     *
     * @var string
     */
    public $playMode;
    protected $_name = [
        'contentList'        => 'ContentList',
        'contentType'        => 'ContentType',
        'extendInfo'         => 'ExtendInfo',
        'index'              => 'Index',
        'needAlbumContinued' => 'NeedAlbumContinued',
        'playFrom'           => 'PlayFrom',
        'playMode'           => 'PlayMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentList) {
            $res['ContentList'] = [];
            if (null !== $this->contentList && \is_array($this->contentList)) {
                $n = 0;
                foreach ($this->contentList as $item) {
                    $res['ContentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->needAlbumContinued) {
            $res['NeedAlbumContinued'] = $this->needAlbumContinued;
        }
        if (null !== $this->playFrom) {
            $res['PlayFrom'] = $this->playFrom;
        }
        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openCreatePlayingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentList'])) {
            if (!empty($map['ContentList'])) {
                $model->contentList = [];
                $n                  = 0;
                foreach ($map['ContentList'] as $item) {
                    $model->contentList[$n++] = null !== $item ? contentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['NeedAlbumContinued'])) {
            $model->needAlbumContinued = $map['NeedAlbumContinued'];
        }
        if (isset($map['PlayFrom'])) {
            $model->playFrom = $map['PlayFrom'];
        }
        if (isset($map['PlayMode'])) {
            $model->playMode = $map['PlayMode'];
        }

        return $model;
    }
}
