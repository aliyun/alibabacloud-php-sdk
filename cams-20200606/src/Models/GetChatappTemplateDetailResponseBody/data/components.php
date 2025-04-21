<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\cards;

class components extends Model
{
    /**
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @var buttons[]
     */
    public $buttons;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var cards[]
     */
    public $cards;

    /**
     * @var int
     */
    public $codeExpirationMinutes;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $locationAddress;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $offerExpirationTimeMs;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $thumbUrl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var bool
     */
    public $hasExpiration;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons' => 'Buttons',
        'caption' => 'Caption',
        'cards' => 'Cards',
        'codeExpirationMinutes' => 'CodeExpirationMinutes',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'format' => 'Format',
        'latitude' => 'Latitude',
        'locationAddress' => 'LocationAddress',
        'locationName' => 'LocationName',
        'longitude' => 'Longitude',
        'offerExpirationTimeMs' => 'OfferExpirationTimeMs',
        'text' => 'Text',
        'thumbUrl' => 'ThumbUrl',
        'type' => 'Type',
        'url' => 'Url',
        'hasExpiration' => 'hasExpiration',
    ];

    public function validate()
    {
        if (\is_array($this->buttons)) {
            Model::validateArray($this->buttons);
        }
        if (\is_array($this->cards)) {
            Model::validateArray($this->cards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addSecretRecommendation) {
            $res['AddSecretRecommendation'] = $this->addSecretRecommendation;
        }

        if (null !== $this->buttons) {
            if (\is_array($this->buttons)) {
                $res['Buttons'] = [];
                $n1 = 0;
                foreach ($this->buttons as $item1) {
                    $res['Buttons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        if (null !== $this->cards) {
            if (\is_array($this->cards)) {
                $res['Cards'] = [];
                $n1 = 0;
                foreach ($this->cards as $item1) {
                    $res['Cards'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->codeExpirationMinutes) {
            $res['CodeExpirationMinutes'] = $this->codeExpirationMinutes;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->locationAddress) {
            $res['LocationAddress'] = $this->locationAddress;
        }

        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }

        if (null !== $this->offerExpirationTimeMs) {
            $res['OfferExpirationTimeMs'] = $this->offerExpirationTimeMs;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->hasExpiration) {
            $res['hasExpiration'] = $this->hasExpiration;
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
        if (isset($map['AddSecretRecommendation'])) {
            $model->addSecretRecommendation = $map['AddSecretRecommendation'];
        }

        if (isset($map['Buttons'])) {
            if (!empty($map['Buttons'])) {
                $model->buttons = [];
                $n1 = 0;
                foreach ($map['Buttons'] as $item1) {
                    $model->buttons[$n1++] = buttons::fromMap($item1);
                }
            }
        }

        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        if (isset($map['Cards'])) {
            if (!empty($map['Cards'])) {
                $model->cards = [];
                $n1 = 0;
                foreach ($map['Cards'] as $item1) {
                    $model->cards[$n1++] = cards::fromMap($item1);
                }
            }
        }

        if (isset($map['CodeExpirationMinutes'])) {
            $model->codeExpirationMinutes = $map['CodeExpirationMinutes'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['LocationAddress'])) {
            $model->locationAddress = $map['LocationAddress'];
        }

        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        if (isset($map['OfferExpirationTimeMs'])) {
            $model->offerExpirationTimeMs = $map['OfferExpirationTimeMs'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['hasExpiration'])) {
            $model->hasExpiration = $map['hasExpiration'];
        }

        return $model;
    }
}
