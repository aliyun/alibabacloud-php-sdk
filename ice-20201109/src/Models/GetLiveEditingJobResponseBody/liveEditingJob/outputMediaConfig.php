<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

use AlibabaCloud\Tea\Model;

class outputMediaConfig extends Model
{
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
    public $fileName;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $vodTemplateGroupId;
    protected $_name = [
        'mediaURL'           => 'MediaURL',
        'storageLocation'    => 'StorageLocation',
        'fileName'           => 'FileName',
        'width'              => 'Width',
        'height'             => 'Height',
        'bitrate'            => 'Bitrate',
        'vodTemplateGroupId' => 'VodTemplateGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->vodTemplateGroupId) {
            $res['VodTemplateGroupId'] = $this->vodTemplateGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputMediaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['VodTemplateGroupId'])) {
            $model->vodTemplateGroupId = $map['VodTemplateGroupId'];
        }

        return $model;
    }
}
