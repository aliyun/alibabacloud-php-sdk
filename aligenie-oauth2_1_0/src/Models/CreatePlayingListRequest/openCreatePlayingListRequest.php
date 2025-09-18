<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\CreatePlayingListRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\CreatePlayingListRequest\openCreatePlayingListRequest\contentList;

class openCreatePlayingListRequest extends Model
{
    /**
     * @var contentList[]
     */
    public $contentList;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $index;

    /**
     * @var bool
     */
    public $needAlbumContinued;

    /**
     * @var string
     */
    public $playFrom;

    /**
     * @var string
     */
    public $playMode;
    protected $_name = [
        'contentList' => 'ContentList',
        'contentType' => 'ContentType',
        'extendInfo' => 'ExtendInfo',
        'index' => 'Index',
        'needAlbumContinued' => 'NeedAlbumContinued',
        'playFrom' => 'PlayFrom',
        'playMode' => 'PlayMode',
    ];

    public function validate()
    {
        if (\is_array($this->contentList)) {
            Model::validateArray($this->contentList);
        }
        if (\is_array($this->extendInfo)) {
            Model::validateArray($this->extendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentList) {
            if (\is_array($this->contentList)) {
                $res['ContentList'] = [];
                $n1 = 0;
                foreach ($this->contentList as $item1) {
                    $res['ContentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->extendInfo) {
            if (\is_array($this->extendInfo)) {
                $res['ExtendInfo'] = [];
                foreach ($this->extendInfo as $key1 => $value1) {
                    $res['ExtendInfo'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentList'])) {
            if (!empty($map['ContentList'])) {
                $model->contentList = [];
                $n1 = 0;
                foreach ($map['ContentList'] as $item1) {
                    $model->contentList[$n1] = contentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['ExtendInfo'])) {
            if (!empty($map['ExtendInfo'])) {
                $model->extendInfo = [];
                foreach ($map['ExtendInfo'] as $key1 => $value1) {
                    $model->extendInfo[$key1] = $value1;
                }
            }
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
