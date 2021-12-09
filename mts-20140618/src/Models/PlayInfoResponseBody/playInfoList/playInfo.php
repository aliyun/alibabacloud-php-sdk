<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\PlayInfoResponseBody\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $complexity;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $downloadType;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $plaintext;

    /**
     * @var string
     */
    public $rand;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'url'            => 'Url',
        'activityName'   => 'activityName',
        'bitrate'        => 'bitrate',
        'complexity'     => 'complexity',
        'definition'     => 'definition',
        'downloadType'   => 'downloadType',
        'duration'       => 'duration',
        'encryption'     => 'encryption',
        'encryptionType' => 'encryptionType',
        'format'         => 'format',
        'fps'            => 'fps',
        'height'         => 'height',
        'plaintext'      => 'plaintext',
        'rand'           => 'rand',
        'size'           => 'size',
        'width'          => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->activityName) {
            $res['activityName'] = $this->activityName;
        }
        if (null !== $this->bitrate) {
            $res['bitrate'] = $this->bitrate;
        }
        if (null !== $this->complexity) {
            $res['complexity'] = $this->complexity;
        }
        if (null !== $this->definition) {
            $res['definition'] = $this->definition;
        }
        if (null !== $this->downloadType) {
            $res['downloadType'] = $this->downloadType;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->encryption) {
            $res['encryption'] = $this->encryption;
        }
        if (null !== $this->encryptionType) {
            $res['encryptionType'] = $this->encryptionType;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->plaintext) {
            $res['plaintext'] = $this->plaintext;
        }
        if (null !== $this->rand) {
            $res['rand'] = $this->rand;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['activityName'])) {
            $model->activityName = $map['activityName'];
        }
        if (isset($map['bitrate'])) {
            $model->bitrate = $map['bitrate'];
        }
        if (isset($map['complexity'])) {
            $model->complexity = $map['complexity'];
        }
        if (isset($map['definition'])) {
            $model->definition = $map['definition'];
        }
        if (isset($map['downloadType'])) {
            $model->downloadType = $map['downloadType'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['encryption'])) {
            $model->encryption = $map['encryption'];
        }
        if (isset($map['encryptionType'])) {
            $model->encryptionType = $map['encryptionType'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['fps'])) {
            $model->fps = $map['fps'];
        }
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['plaintext'])) {
            $model->plaintext = $map['plaintext'];
        }
        if (isset($map['rand'])) {
            $model->rand = $map['rand'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
