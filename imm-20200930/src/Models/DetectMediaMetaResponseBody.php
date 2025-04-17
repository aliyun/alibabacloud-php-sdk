<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectMediaMetaResponseBody extends Model
{
    /**
     * @var Address[]
     */
    public $addresses;

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
     * @var AudioStream[]
     */
    public $audioStreams;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $composer;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $formatLongName;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $latLong;

    /**
     * @var string
     */
    public $performer;

    /**
     * @var string
     */
    public $produceTime;

    /**
     * @var int
     */
    public $programCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var int
     */
    public $streamCount;

    /**
     * @var SubtitleStream[]
     */
    public $subtitles;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $videoHeight;

    /**
     * @var VideoStream[]
     */
    public $videoStreams;

    /**
     * @var int
     */
    public $videoWidth;
    protected $_name = [
        'addresses' => 'Addresses',
        'album' => 'Album',
        'albumArtist' => 'AlbumArtist',
        'artist' => 'Artist',
        'audioStreams' => 'AudioStreams',
        'bitrate' => 'Bitrate',
        'composer' => 'Composer',
        'duration' => 'Duration',
        'formatLongName' => 'FormatLongName',
        'formatName' => 'FormatName',
        'language' => 'Language',
        'latLong' => 'LatLong',
        'performer' => 'Performer',
        'produceTime' => 'ProduceTime',
        'programCount' => 'ProgramCount',
        'requestId' => 'RequestId',
        'size' => 'Size',
        'startTime' => 'StartTime',
        'streamCount' => 'StreamCount',
        'subtitles' => 'Subtitles',
        'title' => 'Title',
        'videoHeight' => 'VideoHeight',
        'videoStreams' => 'VideoStreams',
        'videoWidth' => 'VideoWidth',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (\is_array($this->audioStreams)) {
            Model::validateArray($this->audioStreams);
        }
        if (\is_array($this->subtitles)) {
            Model::validateArray($this->subtitles);
        }
        if (\is_array($this->videoStreams)) {
            Model::validateArray($this->videoStreams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->audioStreams)) {
                $res['AudioStreams'] = [];
                $n1 = 0;
                foreach ($this->audioStreams as $item1) {
                    $res['AudioStreams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->subtitles)) {
                $res['Subtitles'] = [];
                $n1 = 0;
                foreach ($this->subtitles as $item1) {
                    $res['Subtitles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->videoStreams)) {
                $res['VideoStreams'] = [];
                $n1 = 0;
                foreach ($this->videoStreams as $item1) {
                    $res['VideoStreams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
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
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1++] = Address::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['AudioStreams'] as $item1) {
                    $model->audioStreams[$n1++] = AudioStream::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Subtitles'] as $item1) {
                    $model->subtitles[$n1++] = SubtitleStream::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['VideoStreams'] as $item1) {
                    $model->videoStreams[$n1++] = VideoStream::fromMap($item1);
                }
            }
        }

        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        return $model;
    }
}
