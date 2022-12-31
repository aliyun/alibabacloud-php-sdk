<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

use AlibabaCloud\Tea\Model;

class outputMediaConfig extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @example test.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 480
     *
     * @var int
     */
    public $height;

    /**
     * @example https://testice-testbucket.oss-cn-shanghai.aliyuncs.com/test.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @example outin-xxxxxx.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @example VOD_NO_TRANSCODE
     *
     * @var string
     */
    public $vodTemplateGroupId;

    /**
     * @example 640
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return outputMediaConfig
     */
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
