<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectMediaMetaResponseBody extends Model
{
    /**
     * @description The addresses.
     *
     * This parameter is returned only when address information is detected.
     * @var Address[]
     */
    public $addresses;

    /**
     * @description The album.
     *
     * @example unable
     *
     * @var string
     */
    public $album;

    /**
     * @description The album artist.
     *
     * @example unable
     *
     * @var string
     */
    public $albumArtist;

    /**
     * @description The artist.
     *
     * @example unable
     *
     * @var string
     */
    public $artist;

    /**
     * @description The audio streams.
     *
     * @var AudioStream[]
     */
    public $audioStreams;

    /**
     * @description The bitrate. Unit: bit/s.
     *
     * @example 13164131
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The composer.
     *
     * @example unable
     *
     * @var string
     */
    public $composer;

    /**
     * @description The total duration of the video. Unit: seconds.
     *
     * @example 15.263000
     *
     * @var float
     */
    public $duration;

    /**
     * @description The full format name.
     *
     * @example QuickTime / MOV
     *
     * @var string
     */
    public $formatLongName;

    /**
     * @description The abbreviated format name.
     *
     * @example mov,mp4,m4a,3gp,3g2,mj2
     *
     * @var string
     */
    public $formatName;

    /**
     * @description The language of the content. For more information, see the ISO 639-2 Alpha-3 codes for the representation of names of languages.
     *
     * @example eng
     *
     * @var string
     */
    public $language;

    /**
     * @description The coordinate pair of the central point. The coordinate pair consists of latitude and longitude values. This parameter value must be in the "latitude,longitude" format. Valid values of the latitude: [-90,+90]. Valid values of the longitude: [-180,+180].
     *
     * @example +120.029003,+30.283095
     *
     * @var string
     */
    public $latLong;

    /**
     * @description The performer.
     *
     * @example unable
     *
     * @var string
     */
    public $performer;

    /**
     * @description The time of recording. For more information about the time formats, see the RFC3339 Nano standard.
     *
     * @example 2022-04-24T02:39:57Z
     *
     * @var string
     */
    public $produceTime;

    /**
     * @description The number of programs.
     *
     * @example 2
     *
     * @var int
     */
    public $programCount;

    /**
     * @description The request ID.
     *
     * @example 2213B1A9-EB3D-4666-84E0-24980BC*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The size of the media object. Unit: bytes.
     *
     * @example 25115517
     *
     * @var int
     */
    public $size;

    /**
     * @description The initial playback time.
     *
     * @example 0.000000
     *
     * @var float
     */
    public $startTime;

    /**
     * @description The number of media streams.
     *
     * @example 2
     *
     * @var int
     */
    public $streamCount;

    /**
     * @description The subtitle streams.
     *
     * @var SubtitleStream[]
     */
    public $subtitles;

    /**
     * @description The title of the media object.
     *
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @description The video height in pixels.
     *
     * @example 1920
     *
     * @var int
     */
    public $videoHeight;

    /**
     * @description The video streams.
     *
     * @var VideoStream[]
     */
    public $videoStreams;

    /**
     * @description The video width in pixels.
     *
     * @example 1080
     *
     * @var int
     */
    public $videoWidth;
    protected $_name = [
        'addresses'      => 'Addresses',
        'album'          => 'Album',
        'albumArtist'    => 'AlbumArtist',
        'artist'         => 'Artist',
        'audioStreams'   => 'AudioStreams',
        'bitrate'        => 'Bitrate',
        'composer'       => 'Composer',
        'duration'       => 'Duration',
        'formatLongName' => 'FormatLongName',
        'formatName'     => 'FormatName',
        'language'       => 'Language',
        'latLong'        => 'LatLong',
        'performer'      => 'Performer',
        'produceTime'    => 'ProduceTime',
        'programCount'   => 'ProgramCount',
        'requestId'      => 'RequestId',
        'size'           => 'Size',
        'startTime'      => 'StartTime',
        'streamCount'    => 'StreamCount',
        'subtitles'      => 'Subtitles',
        'title'          => 'Title',
        'videoHeight'    => 'VideoHeight',
        'videoStreams'   => 'VideoStreams',
        'videoWidth'     => 'VideoWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = [];
            if (null !== $this->addresses && \is_array($this->addresses)) {
                $n = 0;
                foreach ($this->addresses as $item) {
                    $res['Addresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->album) {
            $res['Album'] = $this->album;
        }
        if (null !== $this->albumArtist) {
            $res['AlbumArtist'] = $this->albumArtist;
        }
        if (null !== $this->artist) {
            $res['Artist'] = $this->artist;
        }
        if (null !== $this->audioStreams) {
            $res['AudioStreams'] = [];
            if (null !== $this->audioStreams && \is_array($this->audioStreams)) {
                $n = 0;
                foreach ($this->audioStreams as $item) {
                    $res['AudioStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->composer) {
            $res['Composer'] = $this->composer;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->formatLongName) {
            $res['FormatLongName'] = $this->formatLongName;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->latLong) {
            $res['LatLong'] = $this->latLong;
        }
        if (null !== $this->performer) {
            $res['Performer'] = $this->performer;
        }
        if (null !== $this->produceTime) {
            $res['ProduceTime'] = $this->produceTime;
        }
        if (null !== $this->programCount) {
            $res['ProgramCount'] = $this->programCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->subtitles) {
            $res['Subtitles'] = [];
            if (null !== $this->subtitles && \is_array($this->subtitles)) {
                $n = 0;
                foreach ($this->subtitles as $item) {
                    $res['Subtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }
        if (null !== $this->videoStreams) {
            $res['VideoStreams'] = [];
            if (null !== $this->videoStreams && \is_array($this->videoStreams)) {
                $n = 0;
                foreach ($this->videoStreams as $item) {
                    $res['VideoStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectMediaMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n                = 0;
                foreach ($map['Addresses'] as $item) {
                    $model->addresses[$n++] = null !== $item ? Address::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Album'])) {
            $model->album = $map['Album'];
        }
        if (isset($map['AlbumArtist'])) {
            $model->albumArtist = $map['AlbumArtist'];
        }
        if (isset($map['Artist'])) {
            $model->artist = $map['Artist'];
        }
        if (isset($map['AudioStreams'])) {
            if (!empty($map['AudioStreams'])) {
                $model->audioStreams = [];
                $n                   = 0;
                foreach ($map['AudioStreams'] as $item) {
                    $model->audioStreams[$n++] = null !== $item ? AudioStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Composer'])) {
            $model->composer = $map['Composer'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FormatLongName'])) {
            $model->formatLongName = $map['FormatLongName'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LatLong'])) {
            $model->latLong = $map['LatLong'];
        }
        if (isset($map['Performer'])) {
            $model->performer = $map['Performer'];
        }
        if (isset($map['ProduceTime'])) {
            $model->produceTime = $map['ProduceTime'];
        }
        if (isset($map['ProgramCount'])) {
            $model->programCount = $map['ProgramCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n                = 0;
                foreach ($map['Subtitles'] as $item) {
                    $model->subtitles[$n++] = null !== $item ? SubtitleStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }
        if (isset($map['VideoStreams'])) {
            if (!empty($map['VideoStreams'])) {
                $model->videoStreams = [];
                $n                   = 0;
                foreach ($map['VideoStreams'] as $item) {
                    $model->videoStreams[$n++] = null !== $item ? VideoStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        return $model;
    }
}
