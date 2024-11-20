<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

use AlibabaCloud\Tea\Model;

class outputMediaConfig extends Model
{
    /**
     * @description The bitrate of the output file. Unit: Kbit/s. You can leave this parameter empty. The default value is the maximum bitrate of the input materials.
     *
     * @example 1000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description If OutputMediaTarget is set to vod-media, this parameter indicates the file name of the output file. The value contains the file name extension but not the path.
     *
     * @example test.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The height of the output file. You can leave this parameter empty. The default value is the maximum height of the input materials.
     *
     * @example 480
     *
     * @var int
     */
    public $height;

    /**
     * @description The URL of the output file.
     *
     * @example https://testice-testbucket.oss-cn-shanghai.aliyuncs.com/test.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description If OutputMediaTarget is set to vod-media, this parameter indicates the storage location of the media asset in ApsaraVideo VOD. The storage location is the path of the file in ApsaraVideo VOD, excluding the prefix http://. Example: outin-xxxxxx.oss-cn-shanghai.aliyuncs.com.
     *
     * @example outin-xxxxxx.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The ID of the VOD transcoding template group. If VOD transcoding is not required, set the value to VOD_NO_TRANSCODE.
     *
     * @example VOD_NO_TRANSCODE
     *
     * @var string
     */
    public $vodTemplateGroupId;

    /**
     * @description The width of the output file. You can leave this parameter empty. The default value is the maximum width of the input materials.
     *
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
