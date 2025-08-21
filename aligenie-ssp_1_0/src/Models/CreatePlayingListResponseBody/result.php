<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListResponseBody\result\cover;

class result extends Model
{
    /**
     * @var string
     */
    public $albumName;

    /**
     * @var string
     */
    public $albumRawId;

    /**
     * @var int
     */
    public $audioLength;

    /**
     * @var int
     */
    public $copyright;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var int
     */
    public $defaultPlayOrder;

    /**
     * @var string
     */
    public $itemUrl;

    /**
     * @var bool
     */
    public $liked;

    /**
     * @var string
     */
    public $lyricUrl;

    /**
     * @var string
     */
    public $playMode;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $rawId;

    /**
     * @var string
     */
    public $singer;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $valid;
    protected $_name = [
        'albumName' => 'AlbumName',
        'albumRawId' => 'AlbumRawId',
        'audioLength' => 'AudioLength',
        'copyright' => 'Copyright',
        'cover' => 'Cover',
        'defaultPlayOrder' => 'DefaultPlayOrder',
        'itemUrl' => 'ItemUrl',
        'liked' => 'Liked',
        'lyricUrl' => 'LyricUrl',
        'playMode' => 'PlayMode',
        'pos' => 'Pos',
        'progress' => 'Progress',
        'rawId' => 'RawId',
        'singer' => 'Singer',
        'source' => 'Source',
        'title' => 'Title',
        'type' => 'Type',
        'valid' => 'Valid',
    ];

    public function validate()
    {
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albumName) {
            $res['AlbumName'] = $this->albumName;
        }

        if (null !== $this->albumRawId) {
            $res['AlbumRawId'] = $this->albumRawId;
        }

        if (null !== $this->audioLength) {
            $res['AudioLength'] = $this->audioLength;
        }

        if (null !== $this->copyright) {
            $res['Copyright'] = $this->copyright;
        }

        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->defaultPlayOrder) {
            $res['DefaultPlayOrder'] = $this->defaultPlayOrder;
        }

        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }

        if (null !== $this->liked) {
            $res['Liked'] = $this->liked;
        }

        if (null !== $this->lyricUrl) {
            $res['LyricUrl'] = $this->lyricUrl;
        }

        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }

        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
        }

        if (null !== $this->singer) {
            $res['Singer'] = $this->singer;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['AlbumName'])) {
            $model->albumName = $map['AlbumName'];
        }

        if (isset($map['AlbumRawId'])) {
            $model->albumRawId = $map['AlbumRawId'];
        }

        if (isset($map['AudioLength'])) {
            $model->audioLength = $map['AudioLength'];
        }

        if (isset($map['Copyright'])) {
            $model->copyright = $map['Copyright'];
        }

        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }

        if (isset($map['DefaultPlayOrder'])) {
            $model->defaultPlayOrder = $map['DefaultPlayOrder'];
        }

        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }

        if (isset($map['Liked'])) {
            $model->liked = $map['Liked'];
        }

        if (isset($map['LyricUrl'])) {
            $model->lyricUrl = $map['LyricUrl'];
        }

        if (isset($map['PlayMode'])) {
            $model->playMode = $map['PlayMode'];
        }

        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
        }

        if (isset($map['Singer'])) {
            $model->singer = $map['Singer'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
