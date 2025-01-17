<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

use AlibabaCloud\Dara\Model;

class outputMediaConfig extends Model
{
    /**
     * @var int
     */
    public $bitrate;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $mediaURL;
    /**
     * @var string
     */
    public $storageLocation;
    /**
     * @var string
     */
    public $vodTemplateGroupId;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'bitrate'            => 'Bitrate',
        'fileName'           => 'FileName',
        'height'             => 'Height',
        'mediaURL'           => 'MediaURL',
        'storageLocation'    => 'StorageLocation',
        'vodTemplateGroupId' => 'VodTemplateGroupId',
        'width'              => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->vodTemplateGroupId) {
            $res['VodTemplateGroupId'] = $this->vodTemplateGroupId;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['VodTemplateGroupId'])) {
            $model->vodTemplateGroupId = $map['VodTemplateGroupId'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
