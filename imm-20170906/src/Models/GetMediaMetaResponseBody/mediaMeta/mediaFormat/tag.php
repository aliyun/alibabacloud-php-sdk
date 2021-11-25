<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $album;

    /**
     * @var string
     */
    public $albumArtist;

    /**
     * @var string
     */
    public $artist;

    /**
     * @var string
     */
    public $composer;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $performer;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'album'        => 'Album',
        'albumArtist'  => 'AlbumArtist',
        'artist'       => 'Artist',
        'composer'     => 'Composer',
        'creationTime' => 'CreationTime',
        'language'     => 'Language',
        'performer'    => 'Performer',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->album) {
            $res['Album'] = $this->album;
        }
        if (null !== $this->albumArtist) {
            $res['AlbumArtist'] = $this->albumArtist;
        }
        if (null !== $this->artist) {
            $res['Artist'] = $this->artist;
        }
        if (null !== $this->composer) {
            $res['Composer'] = $this->composer;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->performer) {
            $res['Performer'] = $this->performer;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Album'])) {
            $model->album = $map['Album'];
        }
        if (isset($map['AlbumArtist'])) {
            $model->albumArtist = $map['AlbumArtist'];
        }
        if (isset($map['Artist'])) {
            $model->artist = $map['Artist'];
        }
        if (isset($map['Composer'])) {
            $model->composer = $map['Composer'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Performer'])) {
            $model->performer = $map['Performer'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
