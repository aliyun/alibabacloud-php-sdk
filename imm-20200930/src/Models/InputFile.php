<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\InputFile\figures;

class InputFile extends Model
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
     * @var string
     */
    public $composer;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var figures[]
     */
    public $figures;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $latLong;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $OSSURI;

    /**
     * @var string
     */
    public $performer;

    /**
     * @var string
     */
    public $produceTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'addresses' => 'Addresses',
        'album' => 'Album',
        'albumArtist' => 'AlbumArtist',
        'artist' => 'Artist',
        'composer' => 'Composer',
        'contentType' => 'ContentType',
        'customId' => 'CustomId',
        'customLabels' => 'CustomLabels',
        'figures' => 'Figures',
        'fileHash' => 'FileHash',
        'labels' => 'Labels',
        'latLong' => 'LatLong',
        'mediaType' => 'MediaType',
        'OSSURI' => 'OSSURI',
        'performer' => 'Performer',
        'produceTime' => 'ProduceTime',
        'title' => 'Title',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (\is_array($this->figures)) {
            Model::validateArray($this->figures);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
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
                    $res['Addresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->composer) {
            $res['Composer'] = $this->composer;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['CustomLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->figures) {
            if (\is_array($this->figures)) {
                $res['Figures'] = [];
                $n1 = 0;
                foreach ($this->figures as $item1) {
                    $res['Figures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latLong) {
            $res['LatLong'] = $this->latLong;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->OSSURI) {
            $res['OSSURI'] = $this->OSSURI;
        }

        if (null !== $this->performer) {
            $res['Performer'] = $this->performer;
        }

        if (null !== $this->produceTime) {
            $res['ProduceTime'] = $this->produceTime;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
                    $model->addresses[$n1] = Address::fromMap($item1);
                    ++$n1;
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

        if (isset($map['Composer'])) {
            $model->composer = $map['Composer'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                foreach ($map['CustomLabels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['Figures'])) {
            if (!empty($map['Figures'])) {
                $model->figures = [];
                $n1 = 0;
                foreach ($map['Figures'] as $item1) {
                    $model->figures[$n1] = figures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LatLong'])) {
            $model->latLong = $map['LatLong'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['OSSURI'])) {
            $model->OSSURI = $map['OSSURI'];
        }

        if (isset($map['Performer'])) {
            $model->performer = $map['Performer'];
        }

        if (isset($map['ProduceTime'])) {
            $model->produceTime = $map['ProduceTime'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
